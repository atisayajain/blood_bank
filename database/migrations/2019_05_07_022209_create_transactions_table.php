<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('bb_id')->unsigned();
            $table->foreign('bb_id')->references('id')->on('blood_bank_profiles');
            $table->bigInteger('up_id')->unsigned();
            $table->foreign('up_id')->references('id')->on('user_profiles');
            $table->bigInteger('blood_type_id')->unsigned();
            $table->foreign('blood_type_id')->references('id')->on('blood_types');
            $table->integer('quantity');
            //0 for donor, 1 for recipient
            $table->boolean('type');
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
        Schema::dropIfExists('transactions');
    }
}
