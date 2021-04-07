<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFileUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_file_upload', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('profile_id');
            $table->integer('school_id');
            $table->integer('syear');
            $table->string('name');
            $table->integer('size');
            $table->string('type');
            $table->binary('content');
            $table->string('file_info');
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
        Schema::dropIfExists('user_file_upload');
    }
}
