<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsJoinPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_join_people', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('student_id', 10, 0);
            $table->decimal('person_id', 10, 0);
            $table->string('is_emergency', 10)->nullable();
            $table->string('emergency_type', 100)->nullable();
            $table->string('relationship', 100);
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
        Schema::dropIfExists('students_join_people');
    }
}
