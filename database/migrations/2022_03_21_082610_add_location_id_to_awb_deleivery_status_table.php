<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationIdToAwbDeleiveryStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awb_deleivery_status', function (Blueprint $table) {
            $table->integer('location_id')->after('deleivery_status_id')->nullable();
            
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
            $table->dropColumn('location_id');
        });
    }
}
