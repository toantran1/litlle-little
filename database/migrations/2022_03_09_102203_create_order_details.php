<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_detail', function (Blueprint $table) {
            $table->Increments('id');                 
            $table->string('username_order');
            $table->string('email');
            $table->string('phone_number',25);
            $table->integer('quantity_ticket');
            $table->string('total_price');
            $table->integer('package_id');
            $table->string('package_code');
            $table->string('package_name');
            $table->string('status');
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
        Schema::dropIfExists('tbl_order_detail');
    }
}
