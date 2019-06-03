<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesOfIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources_of_income', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_info_id');
            $table->string('employer_name')->nullable();
            $table->string('position_occupied')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('length_of_employment')->nullable();
            $table->decimal('monthly_income')->nullable();
            $table->decimal('other_compensation')->nullable();
            $table->string('office_number')->nullable();
            $table->string('spouse_employer_name')->nullable();
            $table->string('spouse_position_occupied')->nullable();
            $table->string('spouse_employer_address')->nullable();
            $table->string('spouse_length_of_employment')->nullable();
            $table->decimal('spouse_monthly_income')->nullable();
            $table->decimal('spouse_other_compensation')->nullable();
            $table->decimal('spouse_office_number')->nullable();
            $table->decimal('total_estimated_income_month')->nullable();
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
        Schema::dropIfExists('sources_of_income');
    }
}
