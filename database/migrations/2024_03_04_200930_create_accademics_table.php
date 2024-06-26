<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accademics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('institute_name');
            $table->string('level');
            // $table->string('program');
            // $table->string('country');
            $table->string('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accademics');
    }
};
