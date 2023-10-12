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
            $table->enum('tipo_negociacao', ['vender','arrendar']);
            $table->integer('qtd_cozinha');
            $table->integer('qtd_sala');
            $table->integer('qtd_quartos');
            $table->integer('qtd_suite');
            $table->integer('qtd_wc');
            $table->string('quintal');
            $table->string('varanda');
            $table->string('dispensa');
            $table->string('area_servico');
            $table->text('descricao');
            $table->decimal('preco', 10, 2)->nullable();
            $table->string('dimensao');
            $table->string('localizacao');
            $table->string('latitude');
            $table->string('longitude');

            $table->unsignedBigInteger('id_cidade');
            $table->unsignedBigInteger('id_distrito');
            $table->unsignedBigInteger('id_tipo_imovel');
            $table->unsignedBigInteger('id_status_imovel');



            $table->foreign('id_cidade')->references('id')->on('cidades')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('id_distrito')->references('id')->on('distritos')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('id_tipo_imovel')->references('id')->on('tipo_imovels')->onDelete('CASCADE')->onUpdate('CASCADE');
            
            $table->foreign('id_status_imovel')->references('id')->on('status_imovels')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('imovels');
    }
};
