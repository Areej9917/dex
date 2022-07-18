<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForwardNo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forward_no', function (Blueprint $table) {
            $table->id();
            $table->integer('awb_no');
            $table->string('fwd_no');
            $table->integer('service_area_id');
            $table->string('forwarder');
            $table->integer('delivery_status_id');
            $table->string('date_time');
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
        Schema::dropIfExists('forward_no');
    }
}
