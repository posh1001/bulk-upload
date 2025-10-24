<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkUpload extends Model
{
    protected $table = 'bulk_uploads';

    protected $fillable = [
        'user_id',
        'department',
        'uploader_name',
        'original_filename',
        'file_path',
        'data',
        'data_preview',
        'rows_count',
        'status',
        'uploaded_by',
        'uploaded_at'
    ];

    protected $casts = [
        'uploaded_at' => 'datetime',
    ];

    public function user()
{
    return $this->belongsTo(User::class, 'uploaded_by');
}

}
