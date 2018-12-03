<?php  

	include 'Database.php';
	include 'Calculator.php';
	include 'Show_tables.php';

	header("Content-Type: application/json");
	

	$input_values = json_decode(stripslashes(file_get_contents("php://input")));

	if ($input_values[0] == true) {

		$db_data = new Show_tables();

		$db_count = $db_data->count_db();

		$db_data->set_db_start($input_values[1]);

		$data = [$db_data->show_data(), $db_count];

		echo json_encode($data);
		
	}elseif ($input_values[0] == false) {
		
		//validation
		foreach ($input_values[1] as $value){
     	   if (!ctype_digit($value)){
      	  	exit('stop :P');
        	}
    	}
		//validation
		if (!preg_match('/[^A-Za-z0-9]/', $input_values[2])){
			//validation
			if (is_bool($input_values[3]) === true) {

			//create object
			$calculate = new Calculator();
			//send data to calculator class
			$calculate->set_array($input_values[1],$input_values[2],$input_values[3]);

			//get data from calcuator class then send to browser
			echo json_encode($calculate->calculate());
			}
		}
	}
?>