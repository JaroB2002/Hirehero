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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('bedrijfnaam');
            $table->string('employees');
            $table->string('adres')->nullable();
            $table->string('postcode')->nullable();
            $table->string('plaats')->nullable();
            $table->string('land')->nullable();
            $table->string('website')->nullable();
            $table->dateTime('oprichtingsdatum')->nullable();
            $table->string('sector')->nullable();
            $table->string('activiteiten')->nullable();
            $table->string('x')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
