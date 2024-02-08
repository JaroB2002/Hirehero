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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->string('thumbnail');
            $table->string('projectName');
            $table->string('introduction');
            $table->string('projectDescription');
            $table->string('conclusion');
            $table->string('tags');
            $table->string('author');
            $table->string('projectLink');
            $table->string('projectImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
