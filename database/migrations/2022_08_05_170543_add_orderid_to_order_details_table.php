<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderidToOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->string('raz_id')->nullable()->after('order_status');
            $table->string('entity')->nullable()->after('raz_id');
            $table->float('raz_amount',10,2)->nullable()->after('entity');
            $table->string('raz_currency')->nullable()->after('raz_amount');
            $table->string('raz_payment_status')->nullable()->after('raz_currency');
            $table->string('raz_description')->nullable()->after('raz_payment_status');
            $table->float('raz_fee',10,2)->nullable()->after('raz_description');
            $table->float('raz_tax',10,2)->nullable()->after('raz_fee');
            $table->string('raz_created_at')->nullable()->after('raz_tax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropColumn('raz_id');
            $table->dropColumn('entity');
            $table->dropColumn('raz_amount');
            $table->dropColumn('raz_currency');
            $table->dropColumn('raz_payment_status');
            $table->dropColumn('raz_description');
            $table->dropColumn('raz_fee');
            $table->dropColumn('raz_tax');
            $table->dropColumn('raz_created_at');

        });
    }
}
