<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genre')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('contact')->nullable();
            $table->string('photo_identite')->nullable();
            $table->string('piece_identite')->nullable();
            $table->date('date_declaration')->nullable();
            $table->string('profession')->nullable();
            $table->string('quartier')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();
          /*  $table->unsignedInteger('validers_id');
            $table->foreign('validers_id')->references('id')->on('validers');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declarations');
    }
}
