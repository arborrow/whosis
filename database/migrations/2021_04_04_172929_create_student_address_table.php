<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_address', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('student_id');
            $table->integer('syear');
            $table->integer('school_id');
            $table->string('street_address_1', 5000)->nullable();
            $table->string('street_address_2', 5000)->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('bus_pickup', 1)->nullable();
            $table->string('bus_dropoff', 1)->nullable();
            $table->string('bus_no')->nullable();
            $table->string('type', 500);
            $table->integer('people_id')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_address');
    }
}
