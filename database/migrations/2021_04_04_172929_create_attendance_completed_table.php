<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceCompletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_completed', function (Blueprint $table) {
            $table->decimal('staff_id', 10, 0);
            $table->date('school_date');
            $table->decimal('period_id', 10, 0);
            $table->integer('course_period_id');
            $table->integer('cpv_id');
            $table->decimal('substitute_staff_id', 10, 0)->nullable();
            $table->char('is_taken_by_substitute_staff', 1)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->timestamps();
            $table->softDeletes();
            $table->string('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_completed');
    }
}
