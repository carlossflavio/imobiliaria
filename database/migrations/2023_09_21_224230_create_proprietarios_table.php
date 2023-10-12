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
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sobrenome')-> nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('imagem')-> nullable();
            $table->string('nif')-> nullable();
            $table->string('telefone')-> nullable();
            $table->string('nacionalidade')-> nullable();
            $table->string('profissao')-> nullable();
            $table->string('morada')-> nullable();
            $table->enum('status', ['activo','inactivo'])->default('activo');
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
        Schema::dropIfExists('proprietarios');
    }
};
