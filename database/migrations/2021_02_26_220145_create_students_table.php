<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('rut')->nullable();

            $table->string('parent_email')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_last_name')->nullable();
            $table->string('parent_rut')->nullable();
            $table->string('parent_phone')->nullable();

            $table->boolean('enabled')->default(1);

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
