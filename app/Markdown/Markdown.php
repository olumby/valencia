<?php namespace App\Markdown;

use cebe\markdown\GithubMarkdown;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Cache\Repository as Cache;
use Illuminate\Config\Repository as Config;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Markdown {

	protected $filesystem;

	protected $cache;

	protected $config;

	protected $renderer;

	function __construct(Cache $cache, Config $config, Filesystem $filesystem, GithubMarkdown $renderer)
	{
		$this->cache = $cache;
		$this->config = $config;
		$this->filesystem = $filesystem;
		$this->renderer = $renderer;
	}

	function getSidebarItems($folder)
	{
		$path = $this->getFolderPath($folder);

		return $this->filesystem->files($path);
	}

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