<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_references', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_info_id');
            $table->string('father_name')->nullable();
            $table->string('father_telephone_number')->nullable();
            $table->string('father_present_address')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_telephone_number')->nullable();
            $table->string('mother_present_address')->nullable();
            $table->string('brother_name')->nullable();
            $table->string('brother_telephone_number')->nullable();
            $table->string('brother_present_address')->nullable();
            $table->string('sister_name')->nullable();
            $table->string('sister_telephone_number')->nullable();
            $table->string('sister_present_address')->nullable();
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
        Schema::dropIfExists('personal_references');
    }
}
