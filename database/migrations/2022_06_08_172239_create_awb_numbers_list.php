<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwbNumbersList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awb_numbers_list', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('awb_no');
            $table->integer('status');
            $table->string('origin');
            $table->string('destination');
            $table->softDeletes();
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
        Schema::dropIfExists('awb_numbers_list');
    }
}
