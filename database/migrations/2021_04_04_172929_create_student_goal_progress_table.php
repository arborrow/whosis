<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGoalProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_goal_progress', function (Blueprint $table) {
            $table->integer('progress_id', true);
            $table->decimal('goal_id', 10, 0);
            $table->decimal('student_id', 10, 0);
            $table->date('start_date')->nullable();
            $table->text('progress_name');
            $table->string('proficiency', 100);
            $table->text('progress_description');
            $table->decimal('course_period_id', 10, 0)->nullable();
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
        Schema::dropIfExists('student_goal_progress');
    }
}
