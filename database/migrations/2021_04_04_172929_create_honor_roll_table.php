<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHonorRollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('honor_roll', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('school_id');
            $table->integer('syear');
            $table->string('title', 100);
            $table->string('value', 100)->nullable();
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
        Schema::dropIfExists('honor_roll');
    }
}
