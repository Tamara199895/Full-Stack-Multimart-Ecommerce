<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sells', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('customer_id');
        $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
        $table->unsignedBigInteger('invoice_id')->nullable();
        $table->foreign('invoice_id')->references('id')->on('purchase_product_lists')->onDelete('cascade');
        $table->tinyInteger('sell_type')->comment('pos_sell=1,ecommerce_sell=2');
        $table->tinyInteger('sell_by')->nullable();
        $table->unsignedBigInteger('bank_id')->nullable();
        $table->foreign('bank_id')->references('id')->on('bank_accounts')->onDelete('cascade');
        $table->decimal('total_vat_amount', 11, 3)->default(0);
        $table->decimal('shipping_cost', 11, 3)->default(0);
        $table->decimal('total_discount', 11, 3)->default(0);
        $table->decimal('total_payable_amount', 11, 3);
        $table->decimal('total_paid', 11, 2);
        $table->decimal('total_due', 11, 2);
        $table->tinyInteger('payment_type')->comment('0=>cash_on_hand,1=>online_pay')->nullable()->default(0);
        $table->tinyInteger('order_status')->comment('0=pending,1=processing,2=on_the_way 3=cancel_request,4=cancel_accepted,5=cancel_order_process_completed,6=order completed')->nullable();
        $table->timestamp('date');
        $table->tinyInteger('status')->comment('0=uncompleted,1=completed')->default(0);
        $table->timestamps();
        $table->tinyInteger('deleted')->default(0)->comment('0=active,1=deleted');
        $table->softDeletes();
        $table->unsignedBigInteger('created_by')->nullable();
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->unsignedBigInteger('deleted_by')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sells');
    }
};
