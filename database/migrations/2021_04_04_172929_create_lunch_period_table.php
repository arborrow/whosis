<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLunchPeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lunch_period', function (Blueprint $table) {
            $table->decimal('student_id', 10, 0)->nullable();
            $table->date('school_date')->nullable();
            $table->decimal('period_id', 10, 0)->nullable();
            $table->decimal('attendance_code', 10, 0)->nullable();
            $table->decimal('attendance_teacher_code', 10, 0)->nullable();
            $table->string('attendance_reason', 100)->nullable();
            $table->string('admin', 1)->nullable();
            $table->decimal('course_period_id', 10, 0)->nullable();
            $table->integer('marking_period_id')->nullable();
            $table->string('lunch_period', 100)->nullable();
            $table->decimal('table_name', 10, 0)->nullable();
            $table->string('comment', 100)->nullable();
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
        Schema::dropIfExists('lunch_period');
    }
}
