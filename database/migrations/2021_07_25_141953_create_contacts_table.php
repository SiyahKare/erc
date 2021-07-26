<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('contact_type')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('short_name')->nullable();
            $table->float('balance')->nullable();
            $table->float('trl_balance')->nullable();
            $table->float('usd_balance')->nullable();
            $table->float('eur_balance')->nullable();
            $table->float('gbp_balance')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('tax_office')->nullable();
            $table->string('archived')->nullable();
            $table->string('account_type')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('is_abroad')->nullable();
            $table->string('term_days')->nullable();
            $table->string('e_invoice_scenario')->nullable();
            $table->string('e_invoice_send_to')->nullable();
            $table->string('e_document_note')->nullable();
            $table->string('e_document_append_contact_balance')->nullable();
            $table->string('sharings_count')->nullable();
            $table->string('exchange_rate_type')->nullable();
            $table->string('untrackable')->nullable();
            $table->string('country')->nullable();
            $table->string('iban')->nullable();
            $table->string('sharing_preview_url')->nullable();
            $table->string('sharing_preview_path')->nullable();
            $table->string('payment_reminder_preview_url')->nullable();
            $table->string('relationships')->nullable();
            $table->string('category')->nullable();
            $table->string('price_list')->nullable();
            $table->string('contact_portal')->nullable();
            $table->string('contact_people')->nullable();
            $table->string('activities')->nullable();
            $table->string('e_invoice_inboxes')->nullable();
            $table->string('sharings')->nullable();
            $table->string('tags')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
