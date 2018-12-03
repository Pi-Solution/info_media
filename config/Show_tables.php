<?php

	class Show_tables extends Database{

		private $db_start = 0;

		private $db_count;

		public function set_db_start($value){
			$this->db_start = $value;
		}

		public function count_db(){
			$stmt = $this->connect()->query("SELECT COUNT(*) FROM calculated_numbers");
			$result = $stmt->fetch();
			return $result;
		}


		public function show_data(){
			$stmt = $this->connect()->query("
					SELECT 
						factor1,
						factor2,
						operation,
						result
					FROM 
						calculated_numbers 
					ORDER BY 
						id 
					DESC LIMIT 
						$this->db_start, 
						12");

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$result[] = $row;
			};
			return $result;
		}		
	}
?>