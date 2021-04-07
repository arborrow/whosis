<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEligibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligibility', function (Blueprint $table) {
            $table->decimal('student_id', 10, 0)->nullable();
            $table->decimal('syear', 4, 0)->nullable();
            $table->date('school_date')->nullable();
            $table->decimal('period_id', 10, 0)->nullable();
            $table->string('eligibility_code', 20)->nullable();
            $table->decimal('course_period_id', 10, 0)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['student_id', 'course_period_id', 'school_date'], 'eligibility_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eligibility');
    }
}
