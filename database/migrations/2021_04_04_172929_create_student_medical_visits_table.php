<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentMedicalVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_medical_visits', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('student_id', 10, 0)->nullable()->index('student_medical_visits_ind1');
            $table->date('school_date')->nullable();
            $table->string('time_in', 20)->nullable();
            $table->string('time_out', 20)->nullable();
            $table->text('reason')->nullable();
            $table->text('result')->nullable();
            $table->longText('comments')->nullable();
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
        Schema::dropIfExists('student_medical_visits');
    }
}
