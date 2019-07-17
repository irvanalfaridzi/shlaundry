<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('supplier_id');
            $table->integer('stock');
            $table->date('date');
            $table->text('note');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('product_id')
                    ->references('id')->on('products')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');

            $table->foreign('supplier_id')
                    ->references('id')->on('suppliers')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
