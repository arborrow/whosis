<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEligibilityActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_eligibility_activities', function (Blueprint $table) {
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('student_id', 10, 0)->nullable()->index('student_eligibility_activities_ind1');
            $table->decimal('activity_id', 10, 0)->nullable();
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
        Schema::dropIfExists('student_eligibility_activities');
    }
}
