<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffCertificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_certification', function (Blueprint $table) {
            $table->integer('staff_certification_id', true);
            $table->integer('staff_id');
            $table->date('staff_certification_date')->nullable();
            $table->date('staff_certification_expiry_date')->nullable();
            $table->string('staff_certification_code', 127)->nullable();
            $table->string('staff_certification_short_name', 127)->nullable();
            $table->string('staff_certification_name')->nullable();
            $table->char('staff_primary_certification_indicator', 1)->nullable();
            $table->dateTime('last_update')->nullable();
            $table->text('staff_certification_description')->nullable();
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
        Schema::dropIfExists('staff_certification');
    }
}
