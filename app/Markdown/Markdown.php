<?php namespace App\Markdown;

use cebe\markdown\GithubMarkdown;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Cache\Repository as Cache;
use Illuminate\Config\Repository as Config;
use Illuminate\Html\HtmlBuilder;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Markdown {

	/**
	 * Filesystem instance.
	 *
	 * @var Filesystem
	 */
	protected $filesystem;

	/**
	 * Cache instance.
	 *
	 * @var Cache
	 */
	protected $cache;

	/**
	 * Config instance.
	 *
	 * @var Config
	 */
	protected $config;

	/**
	 * GithubMarkdown instance.
	 *
	 * @var GithubMarkdown
	 */
	protected $renderer;

	/**
	 * HtmlBuilder instance.
	 *
	 * @var HtmlBuilder
	 */
	protected $html;

	/**
	 * @param Cache          $cache
	 * @param Config         $config
	 * @param Filesystem     $filesystem
	 * @param GithubMarkdown $renderer
	 * @param HtmlBuilder    $html
	 */
	function __construct(Cache $cache, Config $config, Filesystem $filesystem, GithubMarkdown $renderer, HtmlBuilder $html)
	{
		$this->cache = $cache;
		$this->config = $config;
		$this->filesystem = $filesystem;
		$this->renderer = $renderer;
		$this->html = $html;
	}

	/**
	 * Get the pages for a specific folder.
	 *
	 * @param $folder
	 * @return array
	 */
	function getSidebarLinksForFolder($folder)
	{
		$path = $this->getFolderPath($folder);

		$response = [
			ucwords($folder) => $this->formatFiles($this->filesystem->files($path), $folder)
		];

		return html_entity_decode($this->html->ul($response));
	}

	/**
	 * Get the parsed markdown for a file within a folder.
	 *
	 * @param $folder
	 * @param $name
	 * @return string
	 */
	function getMainFile($folder, $name)
	{
		$folderPath = $this->getFolderPath($folder);
		$filePath = $folderPath . '/' . $name . '.md';

		if (!$this->filesystem->exists($filePath))
		{
			throw new NotFoundHttpException("Page Not Found");
		}

		$file = $this->filesystem->get($filePath);

		return $this->renderer->parse($file);
	}

	/**
	 * Get the folder path from the config file.
	 *
	 * @param $folder
	 * @return mixed
	 */
	protected function getFolderPath($folder)
	{
		$configPath = 'markdown.folders.' . $folder . '.location';

		if (!$this->config->has($configPath))
		{
			throw new NotFoundHttpException("Page Not Found");
		}

		return $this->config->get($configPath);
	}

	/**
	 * Format and link file names.
	 *
	 * @param $array
	 * @return mixed
	 */
	protected function formatFiles($array, $folder)
	{
		$newArray = $array;
		foreach($array as $key => $item) {
			$cleaned = ucwords(basename($item, '.md'));
			$newArray[$key] = $this->html->linkRoute('page', $cleaned, [$folder, strtolower($cleaned)]);
		}
		return $newArray;
	}
} 