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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('brandname');
            $table->longtext('slug');
            $table->string('ownername');
            $table->string('logo');
            $table->Integer('contractperiod')->nullable();
            $table->string('contractfile')->nullable();
           $table->bigInteger('contactnumber');
           $table->longtext('comapanyEmail');
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
        Schema::dropIfExists('brands');
    }
};
