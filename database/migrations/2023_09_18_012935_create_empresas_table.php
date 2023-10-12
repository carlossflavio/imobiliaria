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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nif')->nullable()->unique();
            $table->string('nome_empresa')->unique();
            $table->string('email_empresa')->unique();
            $table->string('telefone');
            $table->string('localizacao');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('image_empresa');
            $table->string('tituo_text');
            $table->text('texto');
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
        Schema::dropIfExists('empresas');
    }
};
