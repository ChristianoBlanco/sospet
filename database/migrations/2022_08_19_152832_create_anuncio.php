<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnuncio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dado_id')->nullable();
            $table->foreign('dado_id')->references('id')->on('users')->nullOnDelete();
            $table->string('tipo',20);
            $table->string('pet',20);
            $table->string('nome',30);
            $table->text('descricao');
            $table->string('foto1',100)->nullable();
            $table->string('foto2',100)->nullable();
            $table->string('foto3',100)->nullable();
            $table->string('foto4',100)->nullable();
            $table->dateTime('dt_anuncio');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('anuncios');
        Schema::enableForeignKeyConstraints();
    }
}
