<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_requests', function (Blueprint $table) {
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
            $table->integer('request_id', true);
            $table->decimal('student_id', 10, 0)->nullable();
            $table->decimal('subject_id', 10, 0)->nullable();
            $table->decimal('course_id', 10, 0)->nullable();
            $table->string('course_weight', 10)->nullable();
            $table->integer('marking_period_id')->nullable();
            $table->decimal('priority', 10, 0)->nullable();
            $table->decimal('with_teacher_id', 10, 0)->nullable()->index('schedule_requests_ind4');
            $table->decimal('not_teacher_id', 10, 0)->nullable()->index('schedule_requests_ind5');
            $table->decimal('with_period_id', 10, 0)->nullable()->index('schedule_requests_ind6');
            $table->decimal('not_period_id', 10, 0)->nullable()->index('schedule_requests_ind7');
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['course_id', 'course_weight', 'syear', 'school_id'], 'schedule_requests_ind3');
            $table->index(['syear', 'school_id'], 'schedule_requests_ind2');
            $table->index(['student_id', 'course_id', 'course_weight', 'syear', 'school_id'], 'schedule_requests_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_requests');
    }
}
