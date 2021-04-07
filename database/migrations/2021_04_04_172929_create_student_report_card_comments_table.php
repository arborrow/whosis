<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentReportCardCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_report_card_comments', function (Blueprint $table) {
            $table->decimal('syear', 4, 0);
            $table->decimal('school_id', 10, 0)->nullable()->index('student_report_card_comments_ind1');
            $table->decimal('student_id', 10, 0);
            $table->decimal('course_period_id', 10, 0);
            $table->decimal('report_card_comment_id', 10, 0);
            $table->string('comment', 1)->nullable();
            $table->integer('marking_period_id');
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['syear', 'student_id', 'course_period_id', 'marking_period_id', 'report_card_comment_id'],'idx_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_report_card_comments');
    }
}
