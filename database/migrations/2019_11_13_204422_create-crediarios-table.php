<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrediariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crediarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_cliente');
            $table->integer('num_parcelas');
            $table->double('valor_parcelas', 10, 2);
            $table->string('vendedor');
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
        Schema::dropIfExists('crediarios');
    }
}
