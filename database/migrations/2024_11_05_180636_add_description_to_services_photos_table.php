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
        Schema::table('services_photos', function (Blueprint $table) {
            $table->text('description')->after('designation_sous_service')->nullable(); // Ajout de la colonne description
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services_photos', function (Blueprint $table) {
            $table->dropColumn('description'); // Suppression de la colonne description
        });
    }
};
