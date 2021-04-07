<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_years', function (Blueprint $table) {
            $table->integer('marking_period_id')->primary();
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
            $table->string('title', 50)->nullable();
            $table->string('short_name', 10)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('post_start_date')->nullable();
            $table->date('post_end_date')->nullable();
            $table->string('does_grades', 1)->nullable();
            $table->string('does_exam', 1)->nullable();
            $table->string('does_comments', 1)->nullable();
            $table->decimal('rollover_id', 10, 0)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['syear', 'school_id', 'start_date', 'end_date'], 'school_years_ind2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_years');
    }
}
