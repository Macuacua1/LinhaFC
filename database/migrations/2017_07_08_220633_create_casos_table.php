<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado_caso');
            $table->string('chave');
            $table->string('estado_parceiro');
            $table->integer('motivo_id')->unsigned()->nullable();
            $table->foreign('motivo_id')->references('id')->on('motivos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('responsavel_id')->unsigned();
            $table->foreign('responsavel_id')->references('id')->on('responsavels')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('casos');
    }
}
