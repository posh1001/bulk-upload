<?php

namespace App\Jobs;

use App\Models\BulkUpload;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue as Interacts;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Events\BulkUploadCreated;

class ProcessBulkUpload implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $path;
    public $uploaderData;

    public $timeout = 1200; // increase if files may be large

    /**
     * @param string $path stored path inside storage/app (e.g. uploads/xxx.xlsx)
     * @param array $uploaderData (user_id, department, uploader_name, original_filename)
     */
    public function __construct(string $path, array $uploaderData = [])
    {
        $this->path = $path;
        $this->uploaderData = $uploaderData;
    }

    public function handle()
    {
        // Ensure file exists
        $fullPath = storage_path('app/' . $this->path);
        if (!file_exists($fullPath)) {
            return;
        }

        // Read file into arrays (all sheets)
        try {
            $collection = Excel::toArray(null, $fullPath);
        } catch (\Throwable $e) {
            // handle error (log)
            \Log::error('ProcessBulkUpload: error reading file: ' . $e->getMessage());
            return;
        }

        $rows = [];
        foreach ($collection as $sheet) {
            foreach ($sheet as $row) {
                // skip totally empty rows
                if (is_array($row) && array_filter($row) === []) {
                    continue;
                }
                $rows[] = $row;
            }
        }

        $upload = BulkUpload::create([
            'user_id' => $this->uploaderData['user_id'] ?? null,
            'department' => $this->uploaderData['department'] ?? null,
            'uploader_name' => $this->uploaderData['uploader_name'] ?? null,
            'original_filename' => $this->uploaderData['original_filename'] ?? null,
            'data' => $rows,
            'rows_count' => count($rows),
            'uploaded_at' => now(),
        ]);

        // broadcast event so clients get push notice (optional)
        event(new BulkUploadCreated($upload));

        // Optionally delete the original file if you don't want to keep it
        // Storage::delete($this->path);
    }
}
