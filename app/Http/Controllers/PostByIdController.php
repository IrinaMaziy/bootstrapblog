<?php
/**
 * Created by PhpStorm.
 * User: Gluk
 * Date: 02.12.2018
 * Time: 17:02
 */

namespace App\Http\Controllers;

class PostByIdController extends Controller {
	public function __invoke($id) {
		return view('posts-by-id', ['posts' => \App\Models\Article::find($id)]);
	}
}