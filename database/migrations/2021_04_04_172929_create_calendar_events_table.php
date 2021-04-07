<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_events', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('syear', 4, 0)->nullable();
            $table->decimal('school_id', 10, 0)->nullable();
            $table->decimal('calendar_id', 10, 0)->nullable();
            $table->date('school_date')->nullable();
            $table->string('title', 50)->nullable();
            $table->text('description')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->timestamps();
            $table->softDeletes();
            $table->string('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_events');
    }
}
