<?php namespace App\Http\Controllers;

use App\Markdown\Markdown;

class PageController extends Controller {


	protected $markdown;

	function __construct(Markdown $markdown)
	{
		$this->markdown = $markdown;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function process($folder, $title)
	{
		$sidebarItems = $this->markdown->getSidebarItems($folder);
		$main = $this->markdown->getMainFile($folder, $title);

		return view('markdown')->with(['sidebar' => $sidebarItems, 'main' => $main]);
	}

}
