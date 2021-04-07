<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherReassignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_reassignment', function (Blueprint $table) {
            $table->integer('course_period_id');
            $table->integer('teacher_id');
            $table->date('assign_date');
            $table->date('modified_date');
            $table->integer('pre_teacher_id');
            $table->integer('modified_by');
            $table->enum('updated', ['Y', 'N'])->default('N');
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
        Schema::dropIfExists('teacher_reassignment');
    }
}
