<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentMpCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_mp_comments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('student_id', 10, 0);
            $table->decimal('syear', 4, 0);
            $table->integer('marking_period_id');
            $table->integer('staff_id')->nullable();
            $table->longText('comment')->nullable();
            $table->date('comment_date')->nullable();
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
        Schema::dropIfExists('student_mp_comments');
    }
}
