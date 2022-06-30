<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameLocationIdInAwbDeliveryStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awb_delivery_statuses', function (Blueprint $table) {
            $table->renameColumn('location_id','service_area_id');
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
            $table->renameColumn('service_area_id','location_id');
        });
    }
}
