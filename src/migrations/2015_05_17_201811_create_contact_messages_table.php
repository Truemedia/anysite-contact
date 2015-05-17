<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_messages', function($table)
		{
		    $table->increments('id');
		    $table->string('firstname')->nullable();
		    $table->string('lastname')->nullable();
		    $table->string('email')->nullable();
		    $table->string('phone')->nullable();
		    $table->string('message')->nullable();
		    $table->softDeletes();
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
		Schema::dropIfExists('contact_messages');
	}

}
