<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissingAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_attendance', function (Blueprint $table) {
            $table->integer('school_id');
            $table->string('syear', 6)->index('idx_missing_attendance_syear');
            $table->date('school_date');
            $table->integer('course_period_id');
            $table->integer('period_id');
            $table->integer('teacher_id');
            $table->integer('secondary_teacher_id')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['course_period_id', 'period_id', 'syear', 'school_id', 'school_date'], 'idx_appstart_check');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missing_attendance');
    }
}
