<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_fields', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('type', 10)->nullable();
            $table->string('search', 1)->nullable();
            $table->string('title', 30)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->string('select_options', 10000)->nullable();
            $table->decimal('category_id', 10, 0)->nullable();
            $table->char('system_field', 1)->nullable();
            $table->string('required', 1)->nullable();
            $table->string('default_selection')->nullable();
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
        Schema::dropIfExists('people_fields');
    }
}
