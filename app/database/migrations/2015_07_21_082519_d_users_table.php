<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('d_users', function($table) {
            $table->increments('id');
            $table->string('email', 100);
            $table->string('password', 64);
            $table->integer('advertiser')->unusigned();
            $table->string('surname', 150);
            $table->string('name', 150);
            $table->string('avatar', 250);
            $table->string('remember_token', 100);
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
        Schema::drop('d_users');
    }

}
