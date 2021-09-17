<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('vat_rate')->nullable();
            $table->string('unit')->nullable();
            $table->string('list_price')->nullable();
            $table->string('list_price_in_trl')->nullable();
            $table->string('currency')->nullable();
            $table->string('buying_price')->nullable();
            $table->string('buying_price_in_trl')->nullable();
            $table->string('buying_currency')->nullable();
            $table->string('stock_count')->nullable();
            $table->string('initial_stock_count')->nullable();
            $table->string('critical_stock_count')->nullable();
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
        Schema::dropIfExists('products');
    }
}
