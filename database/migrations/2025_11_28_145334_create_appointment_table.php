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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->unsignedBigInteger('user_id');
            $table->string('service')->nullable();
            $table->string('symptoms')->nullable();
            $table->time('time')->nullable();
            $table->date('date')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();

            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
