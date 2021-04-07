<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffSchoolRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_school_relationship', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->integer('school_id');
            $table->integer('syear');
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['staff_id', 'school_id', 'syear']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_school_relationship');
    }
}
