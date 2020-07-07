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
            $table->string('item');
            $table->string('Quantity');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('room_id');
            $table->string('note')->nullable();
            $table->enum('status',['pending','delivered','cancelled'])->default('pending');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')
                    ->onDelete('cascade')->onUpdate('cascade');
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
