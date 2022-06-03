<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admin_fee');
            $table->string('ship_fee');
            $table->string('low_fee');
            $table->string('medium_fee');
            $table->string('normal_fee');
            $table->string('high_fee');
            $table->string('maximum_purchase');
            $table->string('minimum_purchase');
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
        Schema::dropIfExists('fee_models');
    }
}
