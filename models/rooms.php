<?

	/**
	 * 
	 */
	require_once(ROOT.'/components/Db.php');
	class rooms 
	{
		
		public static function getRoomsList() //Відображає перелік всіх
		{
			$db = Db::getConnection();

			$result = $db->query( 'SELECT room_name, short_description, picture_name, room_id FROM rooms;');
	
			$i = 0;
		while($row = $result->fetch()) {
			$roomsList[$i]['room_name'] = $row['room_name'];
			$roomsList[$i]['short_description'] = $row['short_description'];
			$roomsList[$i]['picture_name'] = $row['picture_name'];
			$roomsList[$i]['room_id'] = $row['room_id'];
			$i++;
		}
	

			return $roomsList;


		}

		public static function getDetailedInfo($room_id) {

			$db = Db::getConnection();

			$result = $db->query('SELECT room_name, room_description, amount_of_sockets, amount_of_sensors, square, picture_name ' .
								'FROM rooms ' .
								'WHERE room_id = ' . $room_id . ';');

			$result->setFetchMode(PDO::FETCH_ASSOC);

			$roomsDetailedInfo = $result->fetch();
			/*	$i = 0;
		while($row = $result->fetch()) {
			$roomsDetailedInfo[$i]['room_name'] = $row['room_name'];
			$roomsDetailedInfo[$i]['room_description'] = $row['room_description'];
			$roomsDetailedInfo[$i]['amount_of_sockets'] = $row['amount_of_sockets'];
			$roomsDetailedInfo[$i]['amount_of_sensors'] = $row['amount_of_sensors'];
			$roomsDetailedInfo[$i]['square'] = $row['square'];
			$roomsDetailedInfo[$i]['picture_name'] = $row['picture_name'];
			$i++;
		}*/

		return $roomsDetailedInfo;
		}
	}