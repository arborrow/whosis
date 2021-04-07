<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_contact', function (Blueprint $table) {
            $table->integer('staff_phone_id', true);
            $table->integer('staff_id')->unique('staff_id');
            $table->dateTime('last_update');
            $table->string('staff_home_phone', 62)->nullable();
            $table->string('staff_mobile_phone', 62)->nullable();
            $table->string('staff_work_phone', 62)->nullable();
            $table->string('staff_work_email', 127)->nullable();
            $table->string('staff_personal_email', 127)->nullable();
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
        Schema::dropIfExists('staff_contact');
    }
}
