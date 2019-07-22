<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	public function getCreatedAtAttribute($value) {
		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function comments() {
		return PostComment::where('post_id', $this->id)->orderBy('created_at', 'DESC')->get();
	}

	public function getImageAttribute($image) {
		return 'image/' . $image;
	}

}
