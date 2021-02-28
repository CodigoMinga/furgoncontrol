<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSchoolIdToTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travels', function (Blueprint $table) {
            $table->bigInteger('school_id')->unsigned()->nullable();
            $table->foreign('school_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travels', function (Blueprint $table) {
            //
        });
    }
}
