<?php

namespace Link;

class Route
{

	/**
	 *
	 * @var String
	 */
	public $prefix;

	/**
	 *
	 * @var String
	 */
	private $_uri;

	/**
	 *
	 * @var String
	 */
	private $_method;

	/**
	 *
	 * @var String
	 */
	private $_controller;

	/**
	 *
	 * @param String $uri
	 * @param String $method
	 * @param String $controller
	 */
	public function __construct($uri, $method, $controller)
	{
		$this->_uri = $uri;
		$this->_method = $method;
		$this->_controller = $controller;
	}

	/**
	 *
	 * @return String
	 */
	public function getUri()
	{

		return $this->prefix . $this->_uri;
	}

	/**
	 *
	 * @return String
	 */
	public function getMethod()
	{
		return $this->_method;
	}

	/**
	 *
	 * @return String
	 */
	public function getController()
	{
		return $this->_controller;
	}

}
