<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffEmergencyContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_emergency_contact', function (Blueprint $table) {
            $table->integer('staff_emergency_contact_id', true);
            $table->integer('staff_id')->unique('staff_id');
            $table->string('staff_emergency_first_name');
            $table->string('staff_emergency_last_name');
            $table->string('staff_emergency_relationship');
            $table->string('staff_emergency_home_phone', 64)->nullable();
            $table->string('staff_emergency_mobile_phone', 64)->nullable();
            $table->string('staff_emergency_work_phone', 64)->nullable();
            $table->string('staff_emergency_email')->nullable();
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
        Schema::dropIfExists('staff_emergency_contact');
    }
}
