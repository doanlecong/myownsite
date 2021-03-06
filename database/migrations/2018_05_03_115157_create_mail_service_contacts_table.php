<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailServiceContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_service_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('my_service_contacts_id')->nullable();
            $table->string('file_attach')->nullable();
            $table->longText('content')->nullable();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('status',1)->default('N');
            $table->string('allow_send',1)->default('N');
            $table->dateTime('time_to_send');

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
        Schema::dropIfExists('mail_service_contacts');
    }
}
