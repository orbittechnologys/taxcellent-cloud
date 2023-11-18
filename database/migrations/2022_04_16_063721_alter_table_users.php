<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profileType')->after('email')->nullable();
            $table->date('dob')->after('email')->nullable();
            $table->date('business_dor')->after('email')->nullable();
            $table->string('state')->after('country')->nullable();
            $table->string('business_name')->after('company')->nullable();
            $table->string('business_role')->after('business_name')->nullable();
            $table->string('business_status')->after('business_role')->nullable();
            $table->string('CIN_deatils')->after('business_status')->nullable();
            $table->string('LLPIN_deatils')->after('CIN_deatils')->nullable();
            $table->string('office_address')->after('business_name')->nullable();
            $table->string('office_city')->after('business_name')->nullable();
            $table->string('office_state')->after('business_name')->nullable();
            $table->string('office_zip_code')->after('business_name')->nullable();
            $table->string('office_country')->after('business_name')->nullable();
            $table->string('gstin_attachment')->after('business_name')->nullable();
            $table->string('key_personName')->after('mobile_num')->nullable();
            $table->string('key_personDesignation')->after('key_personName')->nullable();
            $table->string('key_personEmail')->after('key_personDesignation')->nullable();
            $table->string('key_personPhone')->after('key_personEmail')->nullable();
    
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
    }
}
