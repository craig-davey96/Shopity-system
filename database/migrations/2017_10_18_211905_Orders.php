<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('shop_orders' , function (Blueprint $table){
            $table->increments('order_id');
            $table->string('order_reference');
            $table->string('client_reference');
            $table->integer('item_count');
            $table->string('pay_method')->nullable();
            $table->enum('status' , array('Pending' , 'Production' , 'Invoiced' , 'Paid' , 'Cancelled' , 'On Hold' , 'Returned'));
            $table->string('site_specific_1')->nullable();
            $table->string('site_specific_2')->nullable();
            $table->string('site_specific_3')->nullable();
            $table->string('site_specific_4')->nullable();
            $table->string('site_specific_5')->nullable();
            $table->string('site_specific_6')->nullable();
            $table->string('site_specific_7')->nullable();
            $table->string('site_specific_8')->nullable();
            $table->string('site_specific_9')->nullable();
            $table->string('site_specific_10')->nullable();
            $table->ipAddress('ip_address');
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
        //
        Schema::dropIfExists('shop_orders');
    }
}
