<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportMessageStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_message_stores', function (Blueprint $table) {
            $table->id();
            $table->string('message_from')->nullable();
            $table->string('message_to')->nullable();
            $table->string('senders_id')->nullable();
            $table->string('receivers_id')->nullable();
            $table->foreignId('ticket_id')->nullable()->constrained('support_chat_stores')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->longText('message_body',500000)->nullable();
            $table->string('is_admin')->nullable();
            $table->dateTime('expirytime')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_message_stores');
    }
}
