<?php namespace App\Http\Controllers;

use App\Api\Api;

class HomeController extends Controller {

	protected $api;

	function __construct(Api $api)
	{
		$this->api = $api;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sidebarItems = $this->api->getSidebarLinks();
		$main = "Hello";

		return view('markdown')->with(['sidebar' => $sidebarItems, 'main' => $main]);
	}

}
