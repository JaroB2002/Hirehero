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
            $table->foreignId('user_id')->constrained();
            $table->string('school');
            $table->string('opleiding');
            $table->string('interesse')->nullable();
            $table->string('interesse2')->nullable();
            $table->string('desinteresse1')->nullable();
            $table->string('desinteresse2')->nullable();
            $table->string('stageBegin')->nullable();
            $table->string('stageEinde')->nullable();
            $table->string('cv')->nullable();
            $table->string('persoonlijkheid')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
