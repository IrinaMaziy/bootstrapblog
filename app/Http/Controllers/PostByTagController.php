<?php
/**
 * Created by PhpStorm.
 * User: Gluk
 * Date: 01.12.2018
 * Time: 22:01
 */

namespace App\Http\Controllers;

class PostByTagController extends Controller {
	public function __invoke($key) {
		$category = \App\Models\Category::where('key', $key)->first();
		return view('posts-by-tag', ['category' => $category]);
	}
}