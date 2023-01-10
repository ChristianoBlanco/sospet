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
            $table->string('name'); //N�o alterar , manter original do auth laravel
            $table->string('email')->unique(); //N�o alterar , manter original do auth laravel
            $table->string('sobrenome');
            $table->string('cpf',11)->unique();
            $table->string('tel1',14);
            $table->string('tel2',14)->nullable();
            $table->string('endereco');
            $table->string('cidade');
            $table->string('uf');
            $table->timestamp('email_verified_at')->nullable(); //N�o alterar , manter original do auth laravel
            $table->string('password'); //N�o alterar , manter original do auth laravel
            $table->rememberToken(); //N�o alterar , manter original do auth laravel
            $table->timestamps(); //N�o alterar , manter original do auth laravel
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
        Schema::dropIfExists('users'); //N�o alterar , manter original do auth laravel
        Schema::enableForeignKeyConstraints();
    }
}
