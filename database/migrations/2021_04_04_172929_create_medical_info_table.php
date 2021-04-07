<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_info', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('student_id');
            $table->integer('syear');
            $table->integer('school_id');
            $table->string('physician')->nullable();
            $table->string('physician_phone')->nullable();
            $table->string('preferred_hospital')->nullable();
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
        Schema::dropIfExists('medical_info');
    }
}
