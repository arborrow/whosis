<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGpaCalculatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_gpa_calculated', function (Blueprint $table) {
            $table->decimal('student_id', 10, 0)->nullable();
            $table->integer('marking_period_id')->nullable();
            $table->string('mp', 4)->nullable();
            $table->decimal('gpa', 10)->nullable();
            $table->decimal('weighted_gpa', 10)->nullable();
            $table->decimal('unweighted_gpa', 10)->nullable();
            $table->decimal('class_rank', 10, 0)->nullable();
            $table->string('grade_level_short', 100)->nullable();
            $table->decimal('cgpa', 10)->nullable();
            $table->decimal('cum_unweighted_factor', 10, 6)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['marking_period_id', 'student_id'], 'student_gpa_calculated_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_gpa_calculated');
    }
}
