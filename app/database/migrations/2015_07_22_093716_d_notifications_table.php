<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('d_notifications', function($table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->integer('user')->unusigned();
            $table->string('message', 500);
            $table->string('img', 250);
            $table->integer('read')->unusigned();
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
        Schema::drop('d_notifications');
    }

}
