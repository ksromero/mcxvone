<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->unsignedInteger('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('status')->nullable();
            $table->string('address')->nullable();
            $table->string('length_of_stay')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('provincial_address')->nullable();
            $table->string('house_ownership')->nullable();
            $table->string('educational_attainnment')->nullable();
            $table->string('school')->nullable();
            $table->string('degree')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_dob')->nullable();
            $table->string('spouse_pob')->nullable();
            $table->string('spouse_address')->nullable();
            $table->string('spouse_length_of_stay')->nullable();
            $table->string('spouse_telephone_number')->nullable();
            $table->string('spouse_mobile_number')->nullable();
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
        Schema::dropIfExists('customer_info');
    }
}
