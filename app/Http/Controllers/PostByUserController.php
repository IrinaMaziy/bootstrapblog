<?php
/**
 * Created by PhpStorm.
 * User: Gluk
 * Date: 02.12.2018
 * Time: 0:15
 */

namespace App\Http\Controllers;

class PostByUserController extends Controller {
	public function __invoke($id) {
		$users = \App\Models\User::find($id)->posts()->where('user_id', '=', $id)->get();

		return view('posts-by-user', ['posts' => $users], ['articles' => \App\Models\Article::find($id)]);

	}
}