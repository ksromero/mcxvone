<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSketchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sketch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_info_id');
            $table->string('sketch_image')->nullable();
            $table->foreign('customer_info_id')->references('id')->on('customer_info');
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
        Schema::dropIfExists('sketch');
    }
}
