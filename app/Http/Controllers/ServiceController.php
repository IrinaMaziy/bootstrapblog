<?php
/**
 * Created by PhpStorm.
 * User: Gluk
 * Date: 01.12.2018
 * Time: 17:15
 */

namespace App\Http\Controllers;

class ServiceController extends Controller {
	public function __invoke() {
		return view('services', ['services' => \App\Models\Service::all()]);
	}
}