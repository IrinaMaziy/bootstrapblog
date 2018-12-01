<?php
/**
 * Created by PhpStorm.
 * User: Gluk
 * Date: 01.12.2018
 * Time: 17:16
 */

namespace App\Http\Controllers;

class ContactsController extends Controller {
	public function __invoke() {
		return view('contacts', ['contacts' => \App\Models\Contact::all()]);
	}
}