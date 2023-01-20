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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productname');
            $table->string('slug');
            $table->float('size',9,2)->nullable();
            $table->Integer('warranty')->nullable();
            $table->string('catagory_id');
            $table->string('subcatagory_name');
            $table->string('sec_subcatagory_id');
            $table->string('brand');
            $table->string('color');
            $table->float('price',9,2);
            $table->string('discount')->nullable();
            $table->longText('feature');
            $table->longText('description');
            $table->string('images');
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
};
