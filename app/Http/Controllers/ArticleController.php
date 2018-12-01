<?php
/**
 * Created by PhpStorm.
 * User: Gluk
 * Date: 01.12.2018
 * Time: 17:08
 */

namespace App\Http\Controllers;

class ArticleController extends Controller {
	public function __invoke() {
		return view('index', ['articles' => \App\Models\Article::all()]);
	}
}