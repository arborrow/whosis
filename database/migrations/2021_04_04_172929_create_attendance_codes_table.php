<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_codes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('short_name', 10)->nullable()->index('attendance_codes_ind3');
            $table->string('type', 10)->nullable();
            $table->string('state_code', 1)->nullable();
            $table->string('default_code', 1)->nullable();
            $table->decimal('table_name', 10, 0)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['syear', 'school_id'], 'attendance_codes_ind2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_codes');
    }
}
