<?php

namespace App\Controllers;

class PagesController {

	public function home() {



		return view( 'index');


		//or you can use:
		//return view( 'index', compact( 'users' ) ); equivalent to: ['users' => $users]


	}

	public function about() {

		$company ='Laracasts';

		return view('about', ['company' => $company]);
	}

	public function contact() {
		return view('contact');
	}
}