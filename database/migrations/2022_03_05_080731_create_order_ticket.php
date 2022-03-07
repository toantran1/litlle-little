<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tbl_order_ticket', function (Blueprint $table) {
            $table->Increments('order_id');          
            $table->string('sId');
            $table->string('user_order');
            $table->string('email');
            $table->string('phone_number',25);
            $table->integer('quantity_ticket');
            // $table->integer('package_price');
            $table->integer('package_id');
            $table->string('date_use');
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
        Schema::dropIfExists('tbl_order_ticket');
    }
}
