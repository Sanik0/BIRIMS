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
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('document_type_id');
            $table->decimal('amount', 10, 0)->nullable();
            $table->enum('status', ['Pending', 'In-transit', 'Delivered', 'Cancelled'])->default('Pending');
            $table->timestamp('ordered_at')->nullable()->useCurrent();

            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('document_type_id')->references('document_type_id')->on('document_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
