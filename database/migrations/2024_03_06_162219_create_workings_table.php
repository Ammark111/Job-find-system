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
        Schema::create('workings', function (Blueprint $table) {
            $table->id();
            $table->string('institute');
            $table->string('address');
            $table->string('job');
            $table->string('duty');
            $table->string('supervisor_name');
            $table->string('supervisor_phone');
            $table->string('start_date');
            $table->string('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workings');
    }
};
