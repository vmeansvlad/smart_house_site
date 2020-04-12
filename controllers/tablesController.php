<? 

	
	require_once(ROOT . '/models/tables.php');

	class tablesController
	{
		
		public function actionShow($name, $date)
		{ //echo 'test';
			if(isset($_POST['DATE'])) {

				$host = $_SERVER['HTTP_HOST'];
				//echo $host;
				$uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
				
				//echo $uri;
				$extra = 'tables/' . lcfirst($_POST['room_name']) . '-' .$_POST['DATE'];
				//echo $extra;

				header("Location:http://$host$uri/$extra");
				
			}
			
			$temperatureInfo = array();
			$temperatureInfo = tables::getTemperatureInfo($name, $date);

			require_once(ROOT.'/pages/tables.php');
			
			return true;
			
		}

		public function actionView_all() {
			if(isset($_POST['DATE'])) {

				$host = $_SERVER['HTTP_HOST'];
				//echo $host;
				$uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
				
				//echo $uri;
				$extra = 'tables/' . lcfirst($_POST['room_name']) . '-' .$_POST['DATE'];
				//echo $extra;

				header("Location:http://$host$uri/$extra");
				
			}
			require_once(ROOT.'/pages/tables.php');
			return true;
		}
	}
	?>