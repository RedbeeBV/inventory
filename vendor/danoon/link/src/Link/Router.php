<?php

namespace Link;

class Router
{

	/**
	 *
	 * @var bool|string
	 */
	public $baseUrl = false;

	/**
	 *
	 * @var array
	 */
	protected $_routes = array();

	/**
	 *
	 * @var string
	 */
	private $_request_url = false;

	/**
	 *
	 * @var bool
	 */
	private $_validUrl = false;

	/**
	 *
	 * @var bool
	 */
	private $_notFound = false;

	/**
	 *
	 * @var bool|array
	 */
	private $_before = false;

	/**
	 *
	 * @var bool|array
	 */
	private $_after = false;

	/**
	 *
	 */
	public function __construct()
	{

		if (session_id() == '') {

			session_start();
		}

		$this->_before = new \ArrayObject();
		$this->_after = new \ArrayObject();
	}

	/**
	 * @param string $method
	 * @param array $arguments
	 * @return Route
	 */
	public function __call($method, $arguments)
	{

		$uri = $arguments[0];
		$controller = $arguments[1];
		$method = strtoupper($method);

		return new \Link\Route($uri, $method, $controller);
	}

	/**
	 *
	 * @param array $routes
	 */
	public function add($routes)
	{


		foreach ((array)$routes as $route) {

			array_push($this->_routes, $route);
		}
	}

	/**
	 *
	 * @param string $prefix
	 * @param array $routes
	 */
	public function prefix($prefix, $routes = array())
	{

		foreach ((array)$routes as $route) {

			$route->prefix = $prefix;
			array_push($this->_routes, $route);
		}
	}

	/**
	 *
	 */
	private function _before()
	{

		foreach ($this->_before as $hook) {

			if (preg_match("#^$hook->regex$#", $this->_request_url['path'])) {

				call_user_func_array($hook->function, $hook->args);
			}
		}
	}

	/**
	 * @param string $regex
	 * @param callable $callback
	 * @param array $args
	 * @return \stdClass
	 */
	public function before($regex, $callback, $args = array())
	{

		$hook = new \stdClass();

		$hook->regex = $regex;
		$hook->function = $callback;
		$hook->args = (array)$args;

		$this->_before->append($hook);

		return $hook;
	}

	/**
	 *
	 */
	private function _after()
	{

		foreach ($this->_after as $hook) {

			if (preg_match("#^$hook->regex$#", $this->_request_url['path'])) {

				call_user_func_array($hook->function, $hook->args);
			}
		}
	}

	/**
	 * @param string $regex
	 * @param callable $callback
	 * @param array $args
	 * @return \stdClass
	 */
	public function after($regex, $callback, $args = array())
	{

		$hook = new \stdClass();

		$hook->regex = $regex;
		$hook->function = $callback;
		$hook->args = (array)$args;

		$this->_after->append($hook);

		return $hook;
	}

	/**
	 * @param string $url
	 * @param array $params
	 */
	public function redirect($url, $params = array('statusCode' => false, 'timeout' => false))
	{

		if ($params['timeout']) {
			echo '<meta http-equiv="refresh" content="' . $params['timeout'] . ';url=' . $url . '">';
			exit();
		} elseif ($params['statusCode']) {
			header('Location: ' . $url, true, $params['statusCode']);
			exit();
		} else {
			header('Location: ' . $url, true, 303);
			exit();
		}
	}

	/**
	 *
	 */
	private function _notFound()
	{
		echo '<html>';
		echo '<head>';
		echo '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/paper/bootstrap.min.css">';
		echo '</head>';
		echo '<body class="container bg-primary">';
		echo '<div class="row-fluid ">';
		echo '<h1 class="col-md-12 text-center">';
		echo '404';
		echo '</h1>';
		echo '<p class="col-md-12  text-center">';
		echo 'The page you requested could not be found';
		echo '</p>';
		echo '</div>';
		echo '</body>';
		echo '</html>';
	}

	/**
	 * @param Route $a
	 * @param Route $b
	 * @return int
	 */
	private static function _sortRoutes($a, $b)
	{

		return strcmp($b->getUri(), $a->getUri());
	}

	/**
	 *
	 */
	public function run()
	{

		$this->_request_url = parse_url($_SERVER['REQUEST_URI']);

		usort($this->_routes, [__CLASS__, "_sortRoutes"]);

		foreach ($this->_routes as $route) {

			if ($route->getMethod() !== $_SERVER['REQUEST_METHOD']) {
				continue;
			}

			$uri = $this->baseUrl . $route->getUri();

			if (preg_match("#^$uri$#", $this->_request_url['path'], $match)) {

				$this->_before();

				call_user_func_array($route->getController(), [$match]);

				$this->_after();

				$this->_validUrl = true;

				break;
			}
		}

		if (!$this->_validUrl) {

			header("HTTP/1.0 404 Not Found");

			if (!$this->_notFound) {
				$this->_notFound();
			} else {
				call_user_func_array($this->_notFound, []);
			}
		}
	}

}
