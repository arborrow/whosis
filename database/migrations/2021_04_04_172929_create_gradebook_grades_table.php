<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradebookGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradebook_grades', function (Blueprint $table) {
            $table->decimal('student_id', 10, 0);
            $table->decimal('period_id', 10, 0)->nullable();
            $table->decimal('course_period_id', 10, 0);
            $table->decimal('assignment_id', 10, 0)->index('gradebook_grades_ind1');
            $table->decimal('points', 6)->nullable();
            $table->longText('comment')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['student_id', 'assignment_id', 'course_period_id'],'idx_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gradebook_grades');
    }
}
