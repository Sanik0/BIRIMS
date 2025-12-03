<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('blotters', function (Blueprint $table) {
            $table->date('blotter_date')->nullable()->change();
            $table->string('signature')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('blotters', function (Blueprint $table) {
            $table->date('blotter_date')->nullable(false)->change();
            $table->string('signature')->nullable(false)->change();
        });
    }
};