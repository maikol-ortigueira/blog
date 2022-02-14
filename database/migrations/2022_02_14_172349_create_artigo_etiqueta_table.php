<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtigoEtiquetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigo_etiqueta', function (Blueprint $table) {
            $table->primary(['artigo_id', 'etiqueta_id']);
            $table->bigInteger('artigo_id')->unsigned();        
            $table->bigInteger('etiqueta_id')->unsigned();
            $table->foreign('artigo_id')
                  ->references('id')
                  ->on('artigos')->onDelete('cascade');
            $table->foreign('etiqueta_id')
                  ->references('id')
                  ->on('etiquetas')->onDelete('cascade');
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
        Schema::dropIfExists('artigo_etiqueta');
    }
}
