<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsgOutboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msg_outbox', function (Blueprint $table) {
            $table->integer('mail_id', true);
            $table->string('from_user', 211);
            $table->string('to_user', 211);
            $table->string('mail_subject', 211)->nullable();
            $table->longText('mail_body');
            $table->dateTime('mail_datetime')->nullable();
            $table->string('mail_attachment', 211)->nullable();
            $table->integer('istrash')->nullable();
            $table->string('to_cc')->nullable();
            $table->string('to_bcc')->nullable();
            $table->string('to_grpName')->nullable();
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
        Schema::dropIfExists('msg_outbox');
    }
}
