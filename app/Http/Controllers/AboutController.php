<?php
/**
 * Created by PhpStorm.
 * User: Gluk
 * Date: 01.12.2018
 * Time: 17:13
 */

namespace App\Http\Controllers;

class AboutController extends Controller {
	public function __invoke() {
		return view('about');
	}
}