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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('familienaam');
            $table->string('telefoonnummer')->nullable();
            $table->string('school')->nullable();
            $table->string('opleiding')->nullable();
            $table->string('interesse')->nullable();
            $table->string('interesse2')->nullable();
            $table->string('desinteresse1')->nullable();
            $table->string('desinteresse2')->nullable();
            $table->string('stageBegin')->nullable();
            $table->string('stageEinde')->nullable();
            $table->string('cv')->nullable();
            $table->string('persoonlijkheid')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role');
            $table->string('bedrijfnaam')->nullable();
            $table->string('employees')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
