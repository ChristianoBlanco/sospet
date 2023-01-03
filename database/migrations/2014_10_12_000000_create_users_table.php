<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Não alterar , manter original do auth laravel
            $table->string('email')->unique(); //Não alterar , manter original do auth laravel
            $table->string('sobrenome');
            $table->string('cpf',11)->unique();
            $table->bigInteger('tel1');
            $table->bigInteger('tel2')->nullable();
            $table->string('endereco');
            $table->string('cidade');
            $table->string('uf');
            $table->timestamp('email_verified_at')->nullable(); //Não alterar , manter original do auth laravel
            $table->string('password'); //Não alterar , manter original do auth laravel
            $table->rememberToken(); //Não alterar , manter original do auth laravel
            $table->timestamps(); //Não alterar , manter original do auth laravel
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
        Schema::dropIfExists('users'); //Não alterar , manter original do auth laravel
        Schema::enableForeignKeyConstraints();
    }
}
