<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_address', function (Blueprint $table) {
            $table->integer('staff_address_id', true);
            $table->integer('staff_id')->unique('staff_id');
            $table->text('staff_address1_primary');
            $table->text('staff_address2_primary')->nullable();
            $table->string('staff_city_primary');
            $table->string('staff_state_primary');
            $table->string('staff_zip_primary');
            $table->text('staff_address1_mail');
            $table->text('staff_address2_mail')->nullable();
            $table->string('staff_city_mail');
            $table->string('staff_state_mail');
            $table->string('staff_zip_mail');
            $table->dateTime('last_update');
            $table->string('staff_pobox_mail')->nullable();
            $table->timestamp('last_updated')->useCurrent()->comment('Date time staff address record modified');
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
        Schema::dropIfExists('staff_address');
    }
}
