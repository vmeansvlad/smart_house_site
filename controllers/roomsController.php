<? 
	require_once(ROOT.'/models/rooms.php');

	class roomsController
	{
		
		public function actionView_all()
		{
			
			$roomsInfo = array();
			$roomsInfo = rooms::getRoomsList();

			/*
			echo '<pre>';
			print_r($roomsInfo);
			echo '</pre>';
			*/
			
			
			require_once(ROOT.'/pages/rooms.php');

			return true;
			
		}
		
		public function actionShow($room_id)
		{
			
			$roomDetailedInfo = rooms::getDetailedInfo($room_id);
			require_once(ROOT . '/pages/room_info.php');
			return true;
		}
	}

	?>