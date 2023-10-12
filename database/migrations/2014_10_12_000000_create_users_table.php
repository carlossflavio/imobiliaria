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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sobrenome')-> nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('imagem')-> nullable();
            $table->string('nif')-> nullable();
            $table->string('telefone')-> nullable();
            $table->string('morada')-> nullable();
<<<<<<< HEAD
            $table->enum('role', ['secretaria','agente'])->default('agente');
=======
            $table->string('profissao')-> nullable();
            $table->enum('role', ['admin','user','cliente'])->default('cliente');
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
            $table->enum('status', ['activo','inactivo'])->default('activo');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
