<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffSchoolInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_school_info', function (Blueprint $table) {
            $table->integer('staff_school_info_id', true);
            $table->integer('staff_id')->unique('staff_id');
            $table->string('category');
            $table->string('job_title')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('home_school');
            $table->char('opensis_access', 1)->default('N');
            $table->string('opensis_profile')->nullable();
            $table->string('school_access')->nullable();
            $table->timestamp('last_updated')->useCurrent()->comment('Date and time staff school info was modified');
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
        Schema::dropIfExists('staff_school_info');
    }
}
