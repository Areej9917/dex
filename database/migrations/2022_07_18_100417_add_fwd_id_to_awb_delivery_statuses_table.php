<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFwdIdToAwbDeliveryStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awb_delivery_statuses', function (Blueprint $table) {
            $table->integer('fwd_id')->after('date_time')->nullable();
            $table->integer('fwd_no')->after('fwd_id')->nullable();
            $table->text('fwd_url')->after('fwd_no')->nullable();
        });

        Schema::table('forwarders', function (Blueprint $table) {
            $table->text('url')->change();
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
            $table->dropColumn('fwd_id');
            $table->dropColumn('fwd_no');
            $table->dropColumn('fwd_url');
        });

        Schema::table('forwarders', function (Blueprint $table) {
            $table->string('url')->change();
        });
    }
}
