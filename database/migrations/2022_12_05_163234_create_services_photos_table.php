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
        Schema::create('services_photos', function (Blueprint $table) {
            $table->id();
            $table->string('designation_sous_service');
            $table->string('photo');
            $table->string('prix');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_service')->references('id')->on('services')->onDelete('cascade');
            $table->timestamps();
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
            $table->dropForeign('id_service');
        });
        Schema::dropIfExists('services_photos');
    }
};
