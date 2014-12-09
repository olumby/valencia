<?php namespace App\Markdown;

use cebe\markdown\GithubMarkdown;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Cache\Repository as Cache;
use Illuminate\Config\Repository as Config;

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
		$folders = $this->config->get('markdown.folders');

		$path = $folders[$folder]['location'];

		return $this->filesystem->files($path);
	}

	function getMainFile($folder, $name)
	{
		$folders = $this->config->get('markdown.folders');

		$path = $folders[$folder]['location'].'/'.$name.'.md';
		$file = $this->filesystem->get($path);

		return $this->renderer->parse($file);
	}

} 