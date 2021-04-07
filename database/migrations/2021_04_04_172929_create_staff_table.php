<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->integer('staff_id', true);
            $table->decimal('current_school_id', 10, 0)->nullable();
            $table->string('title', 10)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('middle_name', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('profile', 30)->nullable();
            $table->string('homeroom', 5)->nullable();
            $table->decimal('profile_id', 10, 0)->nullable();
            $table->integer('primary_language_id')->nullable();
            $table->string('gender', 8)->nullable();
            $table->integer('ethnicity_id')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('alternate_id', 50)->nullable();
            $table->string('name_suffix', 32)->nullable();
            $table->integer('second_language_id')->nullable();
            $table->integer('third_language_id')->nullable();
            $table->string('is_disable', 10)->nullable();
            $table->string('physical_disability', 1)->nullable();
            $table->string('disability_desc', 225)->nullable();
            $table->string('img_name')->nullable();
            $table->binary('img_content')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['last_name', 'first_name'], 'staff_ind2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
