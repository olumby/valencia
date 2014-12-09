<?php namespace App\Http\Controllers;

use App\Api\ApiManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiController extends Controller {

	protected $apiManager;

	function __construct(ApiManager $apiManager)
	{
		$this->apiManager = $apiManager;
	}

	function process($name)
	{
		try {
			$api = $this->apiManager->apiForName($name);
		} catch(\Exception $e) {
			throw new NotFoundHttpException("Page not found");
		}

		dd($api);

	}

}