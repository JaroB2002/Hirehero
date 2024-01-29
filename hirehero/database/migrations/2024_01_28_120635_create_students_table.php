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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('familienaam');
            $table->string('email')->unique();
            $table->string('telefoonnummer');
            $table->string('school');
            $table->string('opleiding');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role');
            $table->string('password');
            $table->string('interesse');
            $table->string('interesse2');
            $table->string('desinteresse1');
            $table->string('desinteresse2');
            $table->string('stageBegin');
            $table->string('stageEinde');
            $table->string('cv');
            $table->string('persoonlijkheid');
            $table->rememberToken();
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
