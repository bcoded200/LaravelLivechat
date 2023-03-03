<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportChatStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_chat_stores', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->string('client_email')->nullable();
            $table->longText('client_message',500000)->nullable();
            $table->string('report_department')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('guest_id')->nullable();
            $table->boolean('ticket_status')->nullable();
            $table->string('ticket_id')->nullable();
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
        Schema::dropIfExists('support_chat_stores');
    }
}
