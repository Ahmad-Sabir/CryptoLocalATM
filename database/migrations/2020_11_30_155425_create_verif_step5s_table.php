<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verif_step5s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('user_id');
            $table->string('fname');
            $table->date('dob');
            $table->string('nationality');
            $table->tinyIncrements('zipcode');
            $table->string('address');
            $table->string('state');
            $table->string('political_exposed');
            $table->string('occupation');
            $table->string('industry');
            $table->string('income');
            $table->string('worth');
            $table->string('trade');
            $table->string('activity');
            $table->string('admin_verif_status');
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
        Schema::dropIfExists('verif_step5s');
    }
}
