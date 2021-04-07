<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePeriodVarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_period_var', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('course_period_id');
            $table->string('days', 7)->nullable();
            $table->date('course_period_date')->nullable();
            $table->integer('period_id');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->integer('room_id');
            $table->string('does_attendance', 1)->nullable();
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
        Schema::dropIfExists('course_period_var');
    }
}
