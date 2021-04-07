<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->decimal('syear', 4, 0);
            $table->integer('course_id', true);
            $table->decimal('subject_id', 10, 0)->index('courses_ind2');
            $table->decimal('school_id', 10, 0);
            $table->decimal('grade_level', 10, 0)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('short_name', 25)->nullable();
            $table->decimal('rollover_id', 10, 0)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['course_id', 'syear'], 'courses_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
