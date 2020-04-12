<?

	return array(
		
		'rooms/([0-9]+)' => 'rooms/show/$1', //Переглянути більш детально одну кімнату
		'rooms' => 'rooms/view_all', // Вивести загальний перегляд інформації про всі кімнати 

		'tables' => 'tables/view_all',
		'tables/([a-z]+)-([0-9]{4}-[0-9]{2}-[0-9]{2})' => 'tables/show/$1/$2', //переглянути інформацію за конкретною датою

		'project' => 'project/view_info',

		'start_page' => 'start_page/show'
		
		);