<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancePeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_period', function (Blueprint $table) {
            $table->decimal('student_id', 10, 0)->index('attendance_period_ind1');
            $table->date('school_date')->index('attendance_period_ind4');
            $table->decimal('period_id', 10, 0)->index('attendance_period_ind2');
            $table->decimal('attendance_code', 10, 0)->nullable()->index('attendance_period_ind5');
            $table->decimal('attendance_teacher_code', 10, 0)->nullable();
            $table->string('attendance_reason', 100)->nullable();
            $table->string('admin', 1)->nullable();
            $table->decimal('course_period_id', 10, 0);
            $table->integer('marking_period_id')->nullable();
            $table->string('comment', 100)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['student_id', 'school_date', 'period_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_period');
    }
}
