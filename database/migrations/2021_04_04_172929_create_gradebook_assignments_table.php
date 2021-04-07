<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradebookAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradebook_assignments', function (Blueprint $table) {
            $table->integer('assignment_id', true);
            $table->decimal('staff_id', 10, 0)->nullable();
            $table->integer('marking_period_id')->nullable();
            $table->decimal('course_period_id', 10, 0)->nullable();
            $table->decimal('course_id', 10, 0)->nullable();
            $table->decimal('assignment_type_id', 10, 0)->nullable()->index('gradebook_assignments_ind3');
            $table->string('title', 100)->nullable();
            $table->date('assigned_date')->nullable();
            $table->date('due_date')->nullable();
            $table->decimal('points', 10, 0)->nullable();
            $table->longText('description')->nullable();
            $table->integer('ungraded')->default(1);
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['staff_id', 'course_id'], 'gradebook_assignment_types_ind1');
            $table->index(['staff_id', 'marking_period_id'], 'gradebook_assignments_ind1');
            $table->index(['course_id', 'course_period_id'], 'gradebook_assignments_ind2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gradebook_assignments');
    }
}
