<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleFieldCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_field_categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 100)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->string('include', 100)->nullable();
            $table->char('admin', 1)->nullable();
            $table->char('teacher', 1)->nullable();
            $table->char('parent', 1)->nullable();
            $table->char('none', 1)->nullable();
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
        Schema::dropIfExists('people_field_categories');
    }
}
