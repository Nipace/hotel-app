<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('days');
            $table->string('phone');
          
            $table->timestamps();
        });

        Schema::create('customer_has_rooms',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('room_id');
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
        Schema::dropIfExists('customers');
    }
}
