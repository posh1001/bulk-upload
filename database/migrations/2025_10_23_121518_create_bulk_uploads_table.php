<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bulk_uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('department')->nullable();
            $table->string('uploader_name')->nullable();
            $table->string('original_filename')->nullable();
            $table->string('file_path')->nullable();
            $table->longText('data')->nullable();
            $table->longText('data_preview')->nullable();
            $table->integer('rows_count')->default(0);
            $table->string('status')->default('completed');
            $table->unsignedBigInteger('uploaded_by')->nullable()->after('id');
            $table->foreign('uploaded_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamp('uploaded_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bulk_uploads');
    }
};
