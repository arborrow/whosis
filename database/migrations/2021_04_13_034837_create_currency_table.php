<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('country_name', 60)->nullable();
            $table->string('currency_name', 40)->nullable();
            $table->string('currency_code', 3)->nullable();
            $table->string('currency_numeric_code', 3)->nullable();
            $table->string('currency_decimals', 4)->nullable();
            $table->string('currency_symbol', 12)->nullable()->default('$');
            $table->string('iso_code', 2)->nullable()->index('idx_iso_code');
            $table->decimal('sort_order', 10, 0)->nullable();
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
        Schema::dropIfExists('currency');
    }
}
