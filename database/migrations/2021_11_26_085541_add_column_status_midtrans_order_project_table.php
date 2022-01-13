<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnStatusMidtransOrderProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('order_project', function (Blueprint $table) {
            //
            $table->string('status_midtrans')->nullable()->after('payment_status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('order_project', function (Blueprint $table) {
            $table->dropColumn('status_midtrans');

        });
    }
}
