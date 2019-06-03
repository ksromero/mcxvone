<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherSourcesOfIncomeRealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_sources_of_income_real', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('source_of_income_id');
            $table->string('real_property')->nullable();
            $table->string('area')->nullable();
            $table->decimal('market_value')->nullable();
            $table->string('encumbrence_held_by')->nullable();
            $table->foreign('source_of_income_id')->references('id')->on('sources_of_income');
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
        Schema::dropIfExists('other_sources_of_income_real');
    }
}
