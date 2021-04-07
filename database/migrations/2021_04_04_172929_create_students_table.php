<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id', true);
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('name_suffix', 3)->nullable();
            $table->string('gender')->nullable();
            $table->integer('ethnicity_id')->nullable();
            $table->string('common_name')->nullable();
            $table->string('social_security')->nullable();
            $table->string('birthdate')->nullable();
            $table->integer('language_id')->nullable();
            $table->string('estimated_grad_date')->nullable();
            $table->string('alt_id', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('is_disable', 10)->nullable()->index('idx_students_search');
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['last_name', 'first_name', 'middle_name'], 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
