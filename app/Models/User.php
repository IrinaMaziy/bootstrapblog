<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public function posts()
	{
		return $this->hasMany(Article::class, 'user_id');
	}
}
