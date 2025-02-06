<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->Integer('product_id');
            $table->string('product_category');
            $table->string('product_name');
            $table->Integer('product_price');
            $table->string('product_image');
            table->string('name');
            table->string('email');
            table->string('phone');
            table->string('country');
            table->string('state');
            table->string('city');
            table->string('bus_stop');
            table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
