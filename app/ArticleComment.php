<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model {
	public function article() {
		return $this->belongsTo(Article::class);
	}

	public function user() {
		if ($this->type == 'doctor') {
			return Doctor::find($this->user_id);
		}
		return User::find($this->user_id);
	}

}
