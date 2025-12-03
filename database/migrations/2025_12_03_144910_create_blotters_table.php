<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blotters', function (Blueprint $table) {
            $table->id();
            $table->date('blotter_date');
            $table->string('reporter_name');
            $table->string('reporter_address');
            $table->string('reporter_contact');
            $table->integer('reporter_age');
            $table->string('respondent_name');
            $table->string('respondent_address');
            $table->string('respondent_contact');
            $table->integer('respondent_age');
            $table->string('complaint');
            $table->text('description');
            $table->string('signature');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blotters');
    }
};
