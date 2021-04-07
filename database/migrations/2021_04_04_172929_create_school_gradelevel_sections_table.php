<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolGradelevelSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_gradelevel_sections', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('school_id', 10, 0)->nullable()->index('school_gradelevels_ind1');
            $table->string('name', 50)->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
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
        Schema::dropIfExists('school_gradelevel_sections');
    }
}
