<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BulkUploadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'department'    => ['required', 'string', 'max:255'],
            'uploader_name' => ['required', 'string', 'max:255'],
            'file'          => ['required', 'file', 'mimes:csv,xlsx,xls']
        ];
    }
}
