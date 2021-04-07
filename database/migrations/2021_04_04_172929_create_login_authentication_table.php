<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginAuthenticationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_authentication', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('profile_id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->integer('failed_login')->default(0);
            $table->timestamp('last_updated')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['user_id', 'profile_id'], 'COMPOSITE');
            $table->index(['username', 'password'], 'idx_login_authentication_username_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_authentication');
    }
}
