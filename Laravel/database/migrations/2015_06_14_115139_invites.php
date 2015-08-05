<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invites extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invites', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('group_id')->unsigned();
		    $table->foreign('group_id')->references('id')->on('groups')->onCascade('update')->onDelete('cascade');
		    $table->string('code')->unique();
		    $table->timestamp('expires_at');
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
		Schema::drop('invites');
	}

}
