<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->date('dataN');//date
            $table->string('clube', 100);
            $table->integer('posicao')->unsigned()->nullable(); //Chave estrangeira
            // Nome do campo da tabela (nome da FK)
            //references = nome da coluna da tabela referenciando
            //on = nome da tabela que esta
            //plural 
            $table->foreign('posicao')->references('id')->on('posicaos');

            $table->integer('selecao')->unsigned()->nullable(); //Chave estrangeira
            // Nome do campo da tabela (nome da FK)
            //references = nome da coluna da tabela referenciando
            //on = nome da tabela que esta
            //plural 
            $table->foreign('selecao')->references('id')->on('selecaos');
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
        Schema::dropIfExists('jogadors');
    }
}
