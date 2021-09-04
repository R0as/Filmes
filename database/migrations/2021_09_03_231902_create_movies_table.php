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
            //nenhum problema mudar a ordem
            $table->id();//id unico pro filme
            $table->timestamps();//padrao laravel(não é necessariamente necessario), vai criar uma nova coluna dizendo quando foi criada e quando foi utilizada
            $table->string('title',255);//titulo/num de caracteres
            $table->string('genre',255);//genero do filme/num de 
            $table->string('country',255);//pais
            $table->string('release',255);//data de lancamento
            $table->text('synopsis',1000);//sinopse/text permite uma maior quantidade de caracter, ja a string nao
            $table->string('rating',255);//nota(tentar fazer com float)
            $table->string('image')->default('');//o default é pra setar um valor padrao caso n tenha nd
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
