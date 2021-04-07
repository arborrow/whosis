<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCardGradeScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_card_grade_scales', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0);
            $table->string('title', 25)->nullable();
            $table->string('comment', 100)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->decimal('rollover_id', 10, 0)->nullable();
            $table->decimal('gp_scale', 10, 3)->nullable();
            $table->enum('gpa_cal', ['Y', 'N'])->default('Y');
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
        Schema::dropIfExists('report_card_grade_scales');
    }
}
