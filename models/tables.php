<?

	
	require_once(ROOT.'/components/Db.php');
	
	class tables 
	{
		
		public static function getTemperatureInfo($name, $date) //Відображає перелік всіх
		{

			$db = Db::getConnection();

			$result = $db->query( 'SELECT room_name, date, time, temperature ' .
								  'FROM rooms LEFT JOIN temperature_in_rooms ON rooms.room_id = temperature_in_rooms.room_id ' .
								  'WHERE room_name = ' . '\''. ucfirst($name) . '\'' . ' AND date = ' .  '\'' . $date . '\' ' .
								  'ORDER BY date;');
			
			
			
			
			$i = 0;
		while($row = $result->fetch()) {
			$temperatureInfo[$i]['room_name'] = $row['room_name'];
			$temperatureInfo[$i]['date'] = $row['date'];
			$temperatureInfo[$i]['time'] = $row['time'];
			$temperatureInfo[$i]['temperature'] = $row['temperature'];
			$i++;
		}		

			return $temperatureInfo;


		}

	}