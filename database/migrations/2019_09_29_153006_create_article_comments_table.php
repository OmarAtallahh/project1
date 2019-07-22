<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCommentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('article_comments', function (Blueprint $table) {
			$table->increments('id');
			$table->text('body');
			$table->integer('user_id')->unsigned();
			$table->string('type');
			$table->integer('article_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('article_comments', function (Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {

		Schema::dropIfExists('article_comments');
	}
}
