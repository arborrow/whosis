<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_records', function (Blueprint $table) {
            $table->decimal('syear', 5, 0)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('profile', 50)->nullable();
            $table->string('user_name', 100)->nullable();
            $table->timestamp('login_time')->nullable();
            $table->decimal('faillog_count', 4, 0)->nullable();
            $table->decimal('staff_id', 10, 0)->nullable();
            $table->integer('id', true);
            $table->string('faillog_time')->nullable();
            $table->string('ip_address', 20)->nullable();
            $table->string('status', 50)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
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
        Schema::dropIfExists('login_records');
    }
}
