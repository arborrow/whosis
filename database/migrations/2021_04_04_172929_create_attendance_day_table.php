<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_day', function (Blueprint $table) {
            $table->decimal('student_id', 10, 0);
            $table->date('school_date');
            $table->decimal('minutes_present', 10, 0)->nullable();
            $table->decimal('state_value', 2, 1)->nullable();
            $table->decimal('syear', 4, 0)->nullable();
            $table->integer('marking_period_id')->nullable();
            $table->string('comment')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['student_id', 'school_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_day');
    }
}
