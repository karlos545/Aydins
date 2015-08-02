<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repos\user\UsersRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Repos\PostcodesRepository;

class PagesController extends Controller {

	public function index() {

		$title = 'Home';

		return view('static.home')
			->with('title', $title);

	}

	public function contact() {

		$title = 'Contact Us';

		return view('static.contact')
			->with('title', $title);

	}

	public function postcode(Request $request) {
		$check = new PostcodesRepository();
		$check->checkPostcode($request->input('postcode'));

		return redirect('/');
	}


}