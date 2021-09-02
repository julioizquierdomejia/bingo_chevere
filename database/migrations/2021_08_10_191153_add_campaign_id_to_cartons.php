<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampaignIdToCartons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cartons', function (Blueprint $table) {
            //
            $table->string('campaign_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartons', function (Blueprint $table) {
            //
            $table->dropColumn('campaign_id');
        });
    }
}
