<?php namespace App\Api;

use Illuminate\Config\Repository as Config;
use Illuminate\Html\HtmlBuilder;

class Api {

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

	function getApiName()
	{

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
			foreach ($apis as $api)
			{
				$incApis[] = '<a href="">' . $api['name'] . '</a>';
			}
			$nameArray[ucwords($category)] = $incApis;
		}

		return $nameArray;
	}

} 