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
        Schema::create('verification', function (Blueprint $table) {
            $table->id('verification_id');
            $table->unsignedBigInteger('user_id');
            $table->string('image');
            $table->string('type', 100)->nullable();
            $table->timestamp('submitted_at')->useCurrent();

            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verification');
    }
};
