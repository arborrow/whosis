<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarEventsVisibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_events_visibility', function (Blueprint $table) {
            $table->integer('calendar_id');
            $table->integer('profile_id')->nullable();
            $table->string('profile', 50)->nullable();
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
        Schema::dropIfExists('calendar_events_visibility');
    }
}
