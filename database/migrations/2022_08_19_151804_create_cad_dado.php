<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadDado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_dados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_log_usuario');
            $table->string('nome',60);
            $table->string('sobrenome',60);
            $table->string('cpf',11)->unique();
            $table->bigInteger('tel1');
            $table->bigInteger('tel2')->nullable();
            $table->string('email',60)->unique();
            $table->string('endereco',100);
            $table->string('cidade',100);
            $table->string('uf',3);
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
        Schema::dropIfExists('cad_dados');
    }
}
