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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('trainingcenter_id')->nullable();
            //referencia tabla users
            $table->foreign('area_id')
            ->references('id')
            ->on('areas')->onDelete('set null');
            //referencia tabla training_center
            $table->foreign('trainingcenter_id')
            ->references('id')
            ->on('trainingcenters')->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
