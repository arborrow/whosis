<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryMarkingPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_marking_periods', function (Blueprint $table) {
            $table->integer('parent_id')->nullable();
            $table->char('mp_type', 20)->nullable()->index('history_marking_period_ind3');
            $table->char('name', 30)->nullable();
            $table->date('post_end_date')->nullable();
            $table->integer('school_id')->nullable()->index('history_marking_period_ind1');
            $table->integer('syear')->nullable()->index('history_marking_period_ind2');
            $table->integer('marking_period_id')->primary();
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
        Schema::dropIfExists('history_marking_periods');
    }
}
