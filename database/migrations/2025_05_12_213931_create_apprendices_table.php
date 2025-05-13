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
           Schema::create('Apprendices', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->String('cell_number');

            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('computer_id')->nullable();
            //referencia tabla course
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')->onDelete('set null');
            //referencia tabla computer
            $table->foreign('computer_id')
                ->references('id')
                ->on('computers')->onDelete('set null');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprendices');
    }
};

