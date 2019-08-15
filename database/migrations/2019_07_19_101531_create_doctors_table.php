<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('doctors', function (Blueprint $table) {
			$table->increments('id');
			$table->string('first_name', 50);
			$table->string('last_name', 40);
			$table->string('password', 250);
			$table->string('email')->unique();
			$table->bigInteger('job_id');
			$table->integer('country_id');
			$table->bigInteger('phone_number')->nullable();
			$table->string('hospital_name', 100);
			$table->text('about')->nullable();
			$table->string('image')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('doctors');
	}
}
