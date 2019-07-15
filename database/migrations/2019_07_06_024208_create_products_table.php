<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name','255');
            $table->string('Color','100');
            $table->bigInteger('Quantity');
            $table->bigInteger('Price');
            $table->string('Image','150')->nullable();
            $table->string('Network','255')->nullable();
            $table->string('Sim','255')->nullable();
            $table->string('Memory','255')->nullable();
            $table->string('Os','255')->nullable();
            $table->string('CPU','255')->nullable();
            $table->string('Camera','255')->nullable();
            $table->string('SDcard','255')->nullable();
            $table->string('Battery','255')->nullable();
            $table->string('Bluetooth','255')->nullable();
            $table->string('Talktime','255')->nullable();
            $table->string('Waittime','255')->nullable();
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
        Schema::dropIfExists('products');
    }
}
