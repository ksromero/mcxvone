<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_info_id');
            $table->string('with_agent')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('repo_unit')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->decimal('total_price')->nullable();
            $table->decimal('downpayment')->nullable();
            $table->decimal('monthly_installment')->nullable();
            $table->string('terms')->nullable();
            $table->string('purpose')->nullable();
            $table->string('tricycle_franchise_open_in_area')->nullable();
            $table->string('private_use_purpose')->nullable();
            $table->string('customer_type')->nullable();
            $table->string('customer_type_unit_purchased')->nullable();
            $table->string('customer_type_unit_purchased_when')->nullable();
            $table->string('customer_type_branch')->nullable();
            $table->decimal('customer_type_srp')->nullable();
            $table->decimal('customer_type_downpayment')->nullable();
            $table->decimal('customer_type_monthly_amortization')->nullable();
            $table->string('customer_type_terms')->nullable();
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
        Schema::dropIfExists('unit_info');
    }
}
