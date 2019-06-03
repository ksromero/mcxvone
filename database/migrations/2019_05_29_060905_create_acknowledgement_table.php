<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcknowledgementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acknowledgement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_info_id');
            $table->string('date')->nullable();
            $table->string('res_cert_no')->nullable();
            $table->string('issued_at')->nullable();
            $table->string('issued_at_date')->nullable();
            $table->string('tin_no')->nullable();
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
        Schema::dropIfExists('acknowledgement');
    }
}
