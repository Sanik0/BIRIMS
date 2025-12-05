<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('document_type', function (Blueprint $table) {
            $table->id('document_type_id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('amount', 10, 2)->nullable(); // Price for this document
            $table->json('fields')->nullable(); // Store field definitions as JSON
            $table->string('template')->nullable(); // Template file name (optional)
            $table->boolean('is_active')->default(true);
            $table->timestamp('created_at')->nullable()->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('document_type');
    }
};