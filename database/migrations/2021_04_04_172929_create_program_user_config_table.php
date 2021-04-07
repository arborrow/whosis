<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramUserConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_user_config', function (Blueprint $table) {
            $table->decimal('user_id', 10, 0);
            $table->decimal('school_id', 10, 0)->nullable();
            $table->string('program')->nullable();
            $table->string('title', 100)->nullable();
            $table->string('value', 100)->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['user_id', 'program'], 'program_user_config_ind1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_user_config');
    }
}
