<?php

namespace App\Http\Controllers;

use App\Models\BulkUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BulkUploadController extends Controller
{
    public function upload()
    {
        // Eager load user for performance
        $recentUploads = BulkUpload::with('user')->latest()->take(5)->get();

        return view('bulk-upload', compact('recentUploads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        // store uploaded file
        $path = $request->file('file')->store('uploads', 'public');
        $original = $request->file('file')->getClientOriginalName();

        // save to DB
        $upload = BulkUpload::create([
            'user_id' => auth()->id(),
            'uploaded_by' => auth()->id(),
            'department' => $request->input('department', 'N/A'),
            'uploader_name' => $request->uploader_name ?? 'Unknown',   // <-- FIXED
            'original_filename' => $original,
            'file_path' => $path,
            'rows_count' => 0,
            'status' => 'completed',
            'uploaded_at' => now(),
        ]);

        return redirect()->route('bulk-upload')
            ->with('success', 'File uploaded successfully!');
    }

    public function download($id)
    {
        $file = BulkUpload::findOrFail($id);

        return Storage::disk('public')->download($file->file_path, $file->original_filename);
    }
}
