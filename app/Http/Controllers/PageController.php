<?php namespace App\Http\Controllers;

use App\Markdown\Markdown;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PageController extends Controller {


	protected $markdown;

	function __construct(Markdown $markdown)
	{
		$this->markdown = $markdown;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @param $folder
	 * @param $title
	 * @throws NotFoundHttpException
	 * @return Response
	 */
	public function process($folder, $title)
	{
		try
		{
			$sidebarItems = $this->markdown->getSidebarLinksForFolder($folder);
			$main = $this->markdown->getMainFile($folder, $title);
		} catch (\Exception $e)
		{
			throw new NotFoundHttpException("Page not found");
		}


		return view('markdown')->with(['sidebar' => $sidebarItems, 'main' => $main]);
	}

}
