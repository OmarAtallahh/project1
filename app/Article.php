<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	public function getCreatedAtAttribute($value) {
		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
	}

	public function doctor() {
		return $this->belongsTo(Doctor::class);
	}

	public function comments() {
		return ArticleComment::where('article_id', $this->id)->orderBy('created_at', 'DESC')->get();
	}

	public function getImageAttribute($image) {
		return 'image/' . $image;
	}

}
