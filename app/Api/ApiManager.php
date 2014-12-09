<?php namespace App\Api;

use App\Api\Exceptions\ApiNotFoundException;
use Illuminate\Config\Repository as Config;
use Illuminate\Html\HtmlBuilder;

class ApiManager {

	protected $config;

	protected $html;

	function __construct(Config $config, HtmlBuilder $html)
	{
		$this->config = $config;
		$this->html = $html;
	}

	function getSidebarLinks()
	{
		$categories = $this->config->get('api.apis');

		$nameArray = $this->getLinksForCategories($categories);

		return html_entity_decode($this->html->ul($nameArray));
	}

	function apiForName($name)
	{
		$apis = $this->apiList();

		if (!isset($apis[$name]))
		{
			throw new ApiNotFoundException("No Api with name $name");
		}

		return $apis[$name];
	}

	function apiList()
	{
		$arr = $this->config->get('api.apis');

		$results = [];
		foreach ($arr as $category)
		{
			$results = array_merge($results, $category);
		}

		return $results;
	}

	/**
	 * @param $categories
	 * @return array
	 */
	protected function getLinksForCategories($categories)
	{
		$nameArray = [];

		foreach ($categories as $category => $apis)
		{
			$incApis = [];
			foreach ($apis as $key => $api)
			{
				$incApis[] = '<a href="' . $key . '">' . $api['name'] . '</a>';
			}
			$nameArray[ucwords($category)] = $incApis;
		}

		return $nameArray;
	}

} 