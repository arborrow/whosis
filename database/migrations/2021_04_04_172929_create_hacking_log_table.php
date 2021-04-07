<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackingLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hacking_log', function (Blueprint $table) {
            $table->string('host_name', 20)->nullable();
            $table->string('ip_address', 20)->nullable();
            $table->date('login_date')->nullable();
            $table->string('version', 20)->nullable();
            $table->string('php_self', 20)->nullable();
            $table->string('document_root', 100)->nullable();
            $table->string('script_name', 100)->nullable();
            $table->string('modname', 100)->nullable();
            $table->string('username', 20)->nullable();
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
        Schema::dropIfExists('hacking_log');
    }
}
