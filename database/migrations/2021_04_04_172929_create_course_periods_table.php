<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_periods', function (Blueprint $table) {
            $table->integer('syear')->index('course_periods_ind1');
            $table->decimal('school_id', 10, 0);
            $table->integer('course_period_id', true);
            $table->decimal('course_id', 10, 0);
            $table->string('course_weight', 10)->nullable();
            $table->string('title', 100)->nullable();
            $table->text('short_name')->nullable();
            $table->string('mp', 3)->nullable();
            $table->integer('marking_period_id')->nullable();
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->integer('secondary_teacher_id')->nullable();
            $table->integer('total_seats')->nullable();
            $table->decimal('filled_seats', 10, 0)->default(0);
            $table->string('does_honor_roll', 1)->nullable();
            $table->string('does_class_rank', 1)->nullable();
            $table->string('gender_restriction', 1)->nullable();
            $table->string('house_restriction', 1)->nullable();
            $table->integer('availability')->nullable();
            $table->integer('parent_id')->nullable()->index('course_periods_ind5');
            $table->integer('calendar_id')->nullable();
            $table->string('half_day', 1)->nullable();
            $table->string('does_breakoff', 1)->nullable();
            $table->integer('rollover_id')->nullable();
            $table->integer('grade_scale_id')->nullable();
            $table->decimal('credits', 10, 3)->nullable();
            $table->enum('schedule_type', ['FIXED', 'VARIABLE', 'BLOCKED'])->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->integer('modified_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['course_id', 'course_weight', 'syear', 'school_id'], 'course_periods_ind2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_periods');
    }
}
