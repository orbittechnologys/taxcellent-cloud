<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->integer('service_cat_id')->nullable();
            $table->string('service_name')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service', function (Blueprint $table) {
            $table->dropColumn('service_cat_id');
            $table->dropColumn('service_name');
            $table->dropColumn('description');
            $table->dropColumn('price');
            $table->dropColumn('discount');
            $table->dropColumn('status');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');

        });
    }
}
