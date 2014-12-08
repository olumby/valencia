<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return \App\Http\Controllers\HomeController
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

}
