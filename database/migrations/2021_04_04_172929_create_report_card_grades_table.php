<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCardGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_card_grades', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
            $table->string('title', 15)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->decimal('gpa_value', 4)->nullable();
            $table->decimal('break_off', 10, 0)->nullable();
            $table->longText('comment')->nullable();
            $table->decimal('grade_scale_id', 10, 0)->nullable();
            $table->decimal('unweighted_gp', 4)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['syear', 'school_id'], 'report_card_grades_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_card_grades');
    }
}
