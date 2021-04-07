<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_calendar', function (Blueprint $table) {
            $table->decimal('syear', 4, 0);
            $table->decimal('school_id', 10, 0);
            $table->date('school_date');
            $table->decimal('minutes', 10, 0)->nullable();
            $table->string('block', 10)->nullable();
            $table->decimal('calendar_id', 10, 0);
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['syear', 'school_id', 'school_date', 'calendar_id'],'idx_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_calendar');
    }
}
