<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('order_fields', function (Blueprint $table) {
            $table->id('order_fields_id');
            $table->unsignedBigInteger('order_id');
            $table->string('field_name')->nullable();
            $table->string('field_value')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();

            $table->foreign('order_id')->references('order_id')->on('order');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_fields');
    }
};
