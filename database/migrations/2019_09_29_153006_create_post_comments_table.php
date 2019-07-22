<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('post_comments', function (Blueprint $table) {
			$table->increments('id');
			$table->text('body');
			$table->integer('user_id');
			$table->string('type');
			$table->integer('post_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('post_comments', function (Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {

		Schema::dropIfExists('post_comments');
	}
}
