<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentReportCardGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_report_card_grades', function (Blueprint $table) {
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable()->index('student_report_card_grades_ind1');
            $table->decimal('student_id', 10, 0)->index('student_report_card_grades_ind2');
            $table->decimal('course_period_id', 10, 0)->nullable()->index('student_report_card_grades_ind3');
            $table->decimal('report_card_grade_id', 10, 0)->nullable();
            $table->decimal('report_card_comment_id', 10, 0)->nullable();
            $table->longText('comment')->nullable();
            $table->decimal('grade_percent', 5)->nullable();
            $table->string('marking_period_id', 10)->index('student_report_card_grades_ind4');
            $table->string('grade_letter', 5)->nullable();
            $table->decimal('weighted_gp', 10, 3)->nullable();
            $table->decimal('unweighted_gp', 10, 3)->nullable();
            $table->decimal('gp_scale', 10, 3)->nullable();
            $table->string('gpa_cal', 2)->nullable();
            $table->decimal('credit_attempted', 10, 3)->nullable();
            $table->decimal('credit_earned', 10, 3)->nullable();
            $table->string('credit_category', 10)->nullable();
            $table->string('course_code', 100)->nullable();
            $table->text('course_title')->nullable();
            $table->integer('id', true);
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
        Schema::dropIfExists('student_report_card_grades');
    }
}
