<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title',255);//titulo/num de caracteres
            $table->string('genre',255);//genero do filme            
            $table->string('release',255);//data de lancamento
            $table->text('synopsis',1000);//sinopse/text permite uma maior quantidade de caracter, ja a string nao
            $table->string('rating',255);//nota(tentar fazer com float)
            $table->string('image')->default('');//o default é pra setar um valor padrao caso n tenha nd
            
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
