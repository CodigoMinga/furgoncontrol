<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelstudents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->bigInteger('travel_id')->unsigned();
            $table->foreign('travel_id')->references('id')->on('travels')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->decimal('temperature')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travelstudents');
    }
}
