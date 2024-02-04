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
        Schema::create('vacatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->string('title');
            $table->text('description');
            $table->string('minimumSkills');
            $table->string('nicetoHaveSkills');
            $table->string('persoonlijkheid');
            $table->string('categorie');
            //Aantal stageplaatsen
            $table->integer('aantalPlaatsen');
            //Persoon kan aanduiden wat voor sollicitatie ze ontvangen. Of een videoCV verplicht, optioneel of niet.
            $table->string('sollicitatieType');
            $table->string('status')->default('live');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacature');
    }
};
