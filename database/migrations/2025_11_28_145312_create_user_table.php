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
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')->nullable();
            $table->tinyInteger('role')->default(0);
            $table->string('image')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender', 45)->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('citizenship', 45)->nullable();
            $table->string('civil_status', 45)->nullable();
            $table->string('occupation')->nullable();
            $table->integer('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('contact', 20)->nullable();
            $table->tinyInteger('verified')->nullable();
            $table->string('password');
            $table->timestamp('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
