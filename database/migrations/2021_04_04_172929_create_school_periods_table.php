<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_periods', function (Blueprint $table) {
            $table->integer('period_id', true);
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('short_name', 10)->nullable();
            $table->decimal('length', 10, 0)->nullable();
            $table->string('block', 10)->nullable();
            $table->string('ignore_scheduling', 10)->nullable();
            $table->string('attendance', 1)->nullable();
            $table->decimal('rollover_id', 10, 0)->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['period_id', 'syear'], 'school_periods_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_periods');
    }
}
