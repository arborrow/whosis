<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_enrollment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable()->index('student_enrollment_7');
            $table->decimal('student_id', 10, 0)->nullable();
            $table->decimal('grade_id', 10, 0)->nullable()->index('student_enrollment_2');
            $table->string('section_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('enrollment_code', 10, 0)->nullable();
            $table->decimal('drop_code', 10, 0)->nullable();
            $table->decimal('next_school', 10, 0)->nullable();
            $table->decimal('calendar_id', 10, 0)->nullable();
            $table->decimal('last_school', 10, 0)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['syear', 'student_id', 'school_id', 'grade_id'], 'student_enrollment_3');
            $table->index(['syear', 'student_id', 'start_date', 'end_date'], 'student_enrollment_6');
            $table->index(['school_id', 'syear', 'start_date', 'end_date', 'drop_code'], 'idx_student_search');
            $table->index(['student_id', 'enrollment_code'], 'student_enrollment_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_enrollment');
    }
}
