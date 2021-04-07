<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCardCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_card_comments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
            $table->decimal('course_id', 10, 0)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->text('title')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['syear', 'school_id'], 'report_card_comments_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_card_comments');
    }
}
