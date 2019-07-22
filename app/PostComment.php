<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model {
	protected $fillable = ['body'];

	public function user() {
		if ($this->type == 'doctor') {
			return Doctor::find($this->user_id);
		}
		return User::find($this->user_id);
	}

	public function post() {
		return $this->belongsTo(Post::class);
	}

}
