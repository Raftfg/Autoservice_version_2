<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->string('name'); // Nom du demandeur
            $table->string('entreprise')->nullable(); // Nom de l'entreprise (facultatif)
            $table->string('email'); // Adresse e-mail
            $table->string('numero'); // Numéro de téléphone
            $table->string('prestation'); // Type de service demandé
            $table->text('messages'); // Message ou besoin spécifique
            $table->timestamps(); // Champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis');
    }
};
