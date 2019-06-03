<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementMonthlyIncomeAndExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statement_monthly_income_and_expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_info_id');
            $table->decimal('average_monthly_expenses')->nullable();
            $table->decimal('amortization')->nullable();
            $table->decimal('education')->nullable();
            $table->decimal('electricity')->nullable();
            $table->decimal('other_loans')->nullable();
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
        Schema::dropIfExists('statement_monthly_income_and_expenses');
    }
}
