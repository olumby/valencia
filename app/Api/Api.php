<?php namespace App\Api;

abstract class Api {

	protected $name;

	protected $doc;

	protected $updates;

	protected $source;

	protected $endpoint;

	function __construct($doc, $endpoint, $name, $source, $updates)
	{
		$this->doc = $doc;
		$this->endpoint = $endpoint;
		$this->name = $name;
		$this->source = $source;
		$this->updates = $updates;
	}

	abstract function mainBody();

} 