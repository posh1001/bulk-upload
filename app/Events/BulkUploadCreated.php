<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Events\BulkUploadCreated;

event(new BulkUploadCreated($uploadData));

class BulkUploadCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $uploadData;

    /**
     * Create a new event instance.
     */
    public function __construct($uploadData)
    {
        $this->uploadData = $uploadData;
    }
}
