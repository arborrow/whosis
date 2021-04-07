<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->decimal('syear', 4, 0);
            $table->decimal('school_id', 10, 0)->nullable();
            $table->decimal('student_id', 10, 0);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->date('modified_date')->nullable();
            $table->string('modified_by')->nullable();
            $table->decimal('course_id', 10, 0);
            $table->string('course_weight', 10)->nullable();
            $table->decimal('course_period_id', 10, 0)->index('schedule_ind2');
            $table->string('mp', 3)->nullable();
            $table->integer('marking_period_id')->nullable();
            $table->string('scheduler_lock', 1)->nullable();
            $table->string('dropped', 1)->nullable()->default('N');
            $table->integer('id', true);
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['course_id', 'course_weight'], 'schedule_ind1');
            $table->index(['student_id', 'marking_period_id', 'start_date', 'end_date'], 'schedule_ind3');
            $table->index(['syear', 'school_id'], 'schedule_ind4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
