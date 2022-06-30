<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateTimeToAwbDeleiveryStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awb_deleivery_status', function (Blueprint $table) {
            $table->string('date_time')->after('location_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('awb_deleivery_status', function (Blueprint $table) {
            $table->dropColumn('date_time');
        });
    }
}
