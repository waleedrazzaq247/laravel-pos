<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('paid_amount');
            $table->integer('balance');
            $table->string('payment_method')->default('cash');
            $table->integer('user_id');
            $table->integer('transc_id');
            $table->integer('transc_amount');
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
        Schema::dropIfExists('transactions_tables');
    }
}
