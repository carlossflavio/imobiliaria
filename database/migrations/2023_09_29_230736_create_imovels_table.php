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
            Schema::create('imovels', function (Blueprint $table) {
                $table->id();
                $table->string('titulo');
                $table->enum('tipo_negociacao', ['venda', 'arrendamento']);
                $table->decimal('preco', 10, 2)->nullable();
                $table->string('descricao');
                $table->string('localizacao');
                $table->string('imagem_frontal');
                $table->json('imagens_outras')->nullable();
                $table->unsignedBigInteger('id_cidade');
                $table->unsignedBigInteger('id_distrito');
                $table->unsignedBigInteger('id_status');
                $table->json('recursos_opcionais')->nullable();
                $table->json('informacoes_casa')->nullable();
                $table->json('informacoes_apartamento')->nullable();
                $table->json('informacoes_terreno')->nullable();
                $table->timestamps();

                $table->foreign('id_cidade')->references('id')->on('cidades')->onDelete('CASCADE')->onUpdate('CASCADE');
                $table->foreign('id_status')->references('id')->on('status')->onDelete('CASCADE')->onUpdate('CASCADE');
                $table->foreign('id_distrito')->references('id')->on('distritos')->onDelete('CASCADE')->onUpdate('CASCADE');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovels');
    }
};
