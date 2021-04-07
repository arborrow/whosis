<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortalNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portal_notes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('school_id', 10, 0)->nullable();
            $table->decimal('syear', 4, 0)->nullable();
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->decimal('sort_order', 10, 0)->nullable();
            $table->decimal('published_user', 10, 0)->nullable();
            $table->timestamp('last_updated')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('published_profiles')->nullable();
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
        Schema::dropIfExists('portal_notes');
    }
}
