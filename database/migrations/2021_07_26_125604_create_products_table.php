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
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->float('vat_rate')->nullable();
            $table->string('sales_excise_duty_type')->nullable();
            $table->string('sales_excise_duty_code')->nullable();
            $table->float('sales_excise_duty')->nullable();
            $table->string('purchase_excise_duty_type')->nullable();
            $table->string('purchase_excise_duty')->nullable();
            $table->string('communications_tax_rate')->nullable();
            $table->string('unit')->nullable();
            $table->string('archived')->nullable();
            $table->string('sales_invoice_details_count')->nullable();
            $table->string('purchase_invoice_details_count')->nullable();
            $table->string('list_price')->nullable();
            $table->string('list_price_in_trl')->nullable();
            $table->string('currency')->nullable();
            $table->string('buying_price')->nullable();
            $table->string('buying_price_in_trl')->nullable();
            $table->string('buying_currency')->nullable();
            $table->string('inventory_tracking')->nullable();
            $table->string('stock_count')->nullable();
            $table->string('initial_stock_count')->nullable();
            $table->string('critical_stock_count')->nullable();
            $table->string('barcode')->nullable();
            $table->string('gtip')->nullable();
            $table->string('has_stock_movements')->nullable();
            $table->string('photo_url')->nullable();
            $table->string('thumb_url')->nullable();
            $table->string('icon_url')->nullable();
            $table->string('is_processing')->nullable();
            $table->string('relationships')->nullable();
            $table->string('comments')->nullable();
            $table->string('inventory_levels')->nullable();
            $table->string('warehouses')->nullable();
            $table->string('category')->nullable();
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
