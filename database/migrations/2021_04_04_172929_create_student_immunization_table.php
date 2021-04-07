<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentImmunizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_immunization', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('student_id', 10, 0)->nullable()->index('student_medical_ind1');
            $table->string('type', 25)->nullable();
            $table->date('medical_date')->nullable();
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
        Schema::dropIfExists('student_immunization');
    }
}
