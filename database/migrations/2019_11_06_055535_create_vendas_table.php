<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('cod_produto');
          $table->integer('quantidade');
          $table->decimal('valor_venda', 6,2);
          $table->string('pagamento');
          $table->integer('parcelas')->nullable();
          $table->string('entrega');
          $table->date('data');
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
        Schema::dropIfExists('vendas');
    }
}
