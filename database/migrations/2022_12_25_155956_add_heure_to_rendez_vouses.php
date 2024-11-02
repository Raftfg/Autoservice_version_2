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
        Schema::table('rendez_vouses', function (Blueprint $table) {
            $table->time('heure')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('nom')->nullable();
            $table->integer('telephone')->nullable();
            $table->text('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rendez_vouses', function (Blueprint $table) {
            $table->dropColumn('heure')->nullable();
            $table->dropColumn('entreprise')->nullable();
            $table->dropColumn('nom')->nullable();
            $table->dropColumn('telephone')->nullable();
            $table->dropColumn('message')->nullable();
        });
    }
};