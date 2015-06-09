<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('pid');
			$table->integer('user_id')->unsigned();
		    $table->string('city');
		    $table->string('country');
		    $table->string('telephone');
		    $table->date('dob');
		    $table->timestamps(); 

		    $table->foreign('user_id')->references('id')->on('users'); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
