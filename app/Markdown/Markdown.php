<?php namespace App\Markdown;

use cebe\markdown\GithubMarkdown;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Cache\Repository as Cache;
use Illuminate\Config\Repository as Config;
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
	 * @param Cache          $cache
	 * @param Config         $config
	 * @param Filesystem     $filesystem
	 * @param GithubMarkdown $renderer
	 */
	function __construct(Cache $cache, Config $config, Filesystem $filesystem, GithubMarkdown $renderer)
	{
		$this->cache = $cache;
		$this->config = $config;
		$this->filesystem = $filesystem;
		$this->renderer = $renderer;
	}

	/**
	 * Get the pages for a specific folder.
	 *
	 * @param $folder
	 * @return array
	 */
	function getSidebarItems($folder)
	{
		$path = $this->getFolderPath($folder);

		return $this->filesystem->files($path);
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

} 