<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->integer('qty');
            $table->string('name');
            $table->integer('price');
            $table->integer('weight');
            $table->integer('animalId');
            $table->integer('amount');
            $table->string('customer_email')->nullable();
            $table->enum("status", ["not_verifed", "canceled", "pending", "processed", "success"]);
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
