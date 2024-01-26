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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->references('id')->on('subjects');
            $table->string('day', 20);
            $table->string('class_start');
            $table->string('class_end');
            $table->string('room', 20);
            $table->string('circle', 20);
            $table->string('year');
            $table->string('form');
            $table->foreignId('teacher_id')->references('id')->on('teachers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
