<?php namespace App\Http\Controllers;

use App\Api\ApiManager;

class HomeController extends Controller {

	protected $apiManager;

	function __construct(ApiManager $apiManager)
	{
		$this->apiManager = $apiManager;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sidebarItems = $this->apiManager->getSidebarLinks();
		$main = "Hello";

		return view('markdown')->with(['sidebar' => $sidebarItems, 'main' => $main]);
	}

}
