<? 
	
	/**
	 * 
	 */
	class Router
	{
		private $routes;
		function __construct()
		{	
			$routesPath = ROOT.'/config/routes.php';
			$this->routes = include($routesPath);
		}

		private  function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return(trim($_SERVER['REQUEST_URI'], '/')); //???????????????????????????????????????
		}

	}
	public function run ()
	{
		$uri = $this->getURI();
		//echo "URI: " . $uri;
		//print_r($uri);
		//print_r($this-> routes);

		foreach ($this -> routes as $uriPattern => $path) {

			if ( preg_match("~^$uriPattern$~", $uri) ) {

				
				$internalPath = preg_replace("~^$uriPattern$~", $path, $uri);
				//echo $path."<br>";
				//echo $internalPath."<br>";
				//echo $uri;
				$segments = explode('/', $internalPath);
				/*
				echo "<pre>";
				print_r($segments);
				echo "</pre>";
				*/

				

				$controllerName = array_shift($segments) . 'Controller';
				//echo $controllerName. '<br>';
				$actionName = 'action'. ucfirst(array_shift($segments));
				//echo $actionName;
				$parameters = $segments; //Залишаємо масивом
				//print_r($parameters);

				$controllerFile = ROOT . '/controllers/'. $controllerName . '.php';
				//echo '<br> ' . $controllerFile;
				if (file_exists($controllerFile)) {

					require_once($controllerFile);

				}


				$controllerObject = new $controllerName;
			
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters); //???????????????????????????????
				
				//$result = $controllerObject->$actionName($parameters);
				if ($result != null) {

					break;
				}
				
	
}
		
}}}
	