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
        Schema::create('online_payment_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sell_id');
            $table->foreign('sell_id')->references('id')->on('sells')->onDelete('cascade');
            $table->decimal('total_amount',11,3);
            $table->string('pay_with')->nullable();
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->foreign('transaction_id')->references('id')->on('money_transactions')->onDelete('cascade');
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
        Schema::dropIfExists('online_payment_details');
    }
};
