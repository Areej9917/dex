<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameDeleiveryStatusIdInAwbDeliveryStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awb_delivery_statuses', function (Blueprint $table) {
            $table->renameColumn('deleivery_status_id','delivery_status_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('awb_delivery_statuses', function (Blueprint $table) {
            $table->renameColumn('delivery_status_id','deleivery_status_id');
        });
    }
}
