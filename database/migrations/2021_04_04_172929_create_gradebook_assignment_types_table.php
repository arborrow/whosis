<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradebookAssignmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradebook_assignment_types', function (Blueprint $table) {
            $table->integer('assignment_type_id', true);
            $table->decimal('staff_id', 10, 0)->nullable();
            $table->decimal('course_id', 10, 0)->nullable();
            $table->string('title', 100)->nullable();
            $table->decimal('final_grade_percent', 6, 5)->nullable();
            $table->decimal('course_period_id', 10, 0)->nullable();
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
        Schema::dropIfExists('gradebook_assignment_types');
    }
}
