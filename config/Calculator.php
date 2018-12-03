<?php  
	class Calculator extends Database{
		//array from browser stored here
		private $numbers = [];
		//operation from broswer stored here
		private $operation;
		//here we save results
		private $calculated_numbers = [];

		private $will_i_save;

		//function for storing data from browser to class
		public function set_array($table_numbers, $operation, $save){
			foreach ($table_numbers as $numb) {
				$this->numbers[] = $numb;	
			}
			$this->operation = $operation;
			$this->will_i_save = $save;
		}

		//caclucator function
		public function calculate(){
			$d=-1;

			for ($i = 0; $i < count($this->numbers); $i++) { 
				$d++;
				for ($c = 0 + $d; $c < count($this->numbers) ; $c++) { 
					if ($this->operation == 'add') {
						
						$this->calculated_numbers[] = $this->numbers[$i] + $this->numbers[$c];

						$this->sent_to_DB(
										$this->numbers[$i], 
										$this->numbers[$c],
										$this->calculated_numbers[$c]);

					}elseif ($this->operation == 'sub') {

						$this->calculated_numbers[] = $this->numbers[$i] - $this->numbers[$c];

						$this->sent_to_DB($this->numbers[$i], 
										$this->numbers[$c], 
										$this->calculated_numbers[$c]);

					}elseif ($this->operation == 'mult') {

						$this->calculated_numbers[] = $this->numbers[$i] * $this->numbers[$c];

						$this->sent_to_DB($this->numbers[$i], 
										$this->numbers[$c], 
										$this->calculated_numbers[$c]);

					}elseif ($this->operation == 'split') {

						$this->calculated_numbers[] = $this->numbers[$i] / $this->numbers[$c];

						$this->sent_to_DB($this->numbers[$i], 
										$this->numbers[$c], 
										$this->calculated_numbers[$c]);
					}
				}
			}
			//did we save to DB
			if ($this->will_i_save == true) {
				$message = 'PODATCI SACUVANI U BAZU!!!';
			}else{
				$message = 'USPJESNO IZRACUNATO!!!';
			}
			//return value so we can use it in browser
			$calculated_numbers2 = [$this->calculated_numbers, $message];
			return $calculated_numbers2;
		}

		//add to db
		private function sent_to_DB($factor1, $factor2, $result){
			//check if user want to save to DB
			if ($this->will_i_save == true) {
				//creating datetime to use in query
				$sDate = date("Y-m-d H:i:s");
				//add to mySql
				$stmt = $this->connect()->query("INSERT INTO 
					calculated_numbers (
					factor1, 
					factor2, 
					operation, 
					result,
					operation_date)
    			VALUES ($factor1, $factor2, '$this->operation', $result, '$sDate')");
			}
		}
	}
?>