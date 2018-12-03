//here we store server response show data
var db_data = new Array();
//here we store server response for table numbers
var results = new Array();
//here we add numbers from table
var table_numbers = new Array();
//counter how many numbers we have
var counter = 0;
//last used operation
var last_operation;
//var dat set db select limit
var db_start = 0;
var db_data2;
var where_we_now = 11;
//get value from input
function get_numb(){

	var add_numb_value = document.getElementById("number_value");
	var input_number = add_numb_value.value;


	if (input_number != null && input_number != undefined && input_number != 0){
		counter++;
		//alert(input_number + '' + counter);
		add_numb(input_number);
		document.getElementById('box-text').innerHTML = '';
	}else {
		document.getElementById('box-text').innerHTML = 'UNESITE BROJ U POLJE!!!';
	}
}
//verify value and add it to array and add it to table
function add_numb(input_number){
	//boolen that we use when check is number already in array
	var duplicate_verification = false;
	//if array is emty we don't need to check if same number is added
	if (table_numbers.length == 0) {
		table_numbers.push(input_number);
		document.getElementById(`colum${counter}`).innerHTML = input_number;
		document.getElementById(`row${counter}`).innerHTML = input_number;
	}else {
		//checking if this number is already added to array
		for(i = 0; i < table_numbers.length; i++){
			if (input_number == table_numbers[i]) {
				document.getElementById('box-text').innerHTML = 'VEĆ STE UNIJELI OVAJ BROJ!!!'
				duplicate_verification = true;
				counter--;
				break;
			}
		}
		//if ok add to array and table
		if (duplicate_verification == false) {
			if (counter <= 10) {
				document.getElementById(`colum${counter}`).innerHTML = input_number;
				document.getElementById(`row${counter}`).innerHTML = input_number;
				table_numbers.push(input_number);
				document.getElementById('box-text').innerHTML = '';
			}else {
				document.getElementById('box-text').innerHTML = 'TABELA JE PUNA!!!';			
			}
		}	
	}
}
//send array with numbers to server
function send_to_server(save){
	//set last used operation

	if (table_numbers.length != 0) {
	
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
     	 		results = (JSON.parse(this.responseText));
   				add_result_to_table();
    		}
  		};
  		//prepare data
  		var data = new Array();
  		data.push(false, table_numbers, last_operation, save);
  		//send data
  		xhttp.open("POST", "config/controler.php", true);
  		xhttp.setRequestHeader("Content-type", "application/json");
  		xhttp.send(JSON.stringify(data));
  	}else{
  		document.getElementById('box-text').innerHTML = 'UNESI TE BROJ KAKO BI IZVRŠILI KALKULACIJU'
  	}
}
//add resulrt to table
function add_result_to_table(){

	var d = 0;

	for(i = 0;  i < table_numbers.length; i++){
		for(b = 0 + i;  b < table_numbers.length; b++){	
			document.getElementById(`c${b+1}r${i+1}`).innerHTML = results[0][d].toFixed(2);
			document.getElementById(`c${i+1}r${b+1}`).innerHTML = results[0][d].toFixed(2);
			console.log(i + '  ' + b);
			d++;
		}
	}
	//print to text box 
	document.getElementById('box-text').innerHTML = results[1];
}
//dalete from table and array
function delete_from_table(){

	var table_cells = document.getElementsByClassName('table_cell');
	var table_cells_first = document.getElementsByClassName('first');
	
	//delete arrays and var data so we can use them over again
	results.length = 0;
	table_numbers.length = 0;
	counter = 0;
	
	//clean tables
	for (i=0; i < table_cells.length; i++){
		table_cells[i].innerHTML = '';
	}
	for (i=0; i < table_cells_first.length; i++){
		table_cells_first[i].innerHTML = '';
	}
}
//set from where to start db
function from_where_db(operation){

	//conver db count from object to string to number
	db_data_for_slicing = db_data[1];
	db_data_for_slicing = JSON.stringify(db_data_for_slicing);
	db_data_for_slicing = db_data_for_slicing.slice(23);
	var to_number = db_data_for_slicing.slice(0, 3);
	data2 = Number(to_number);

	if (operation == 'add') {
		if (where_we_now < data2) {
			where_we_now = where_we_now + 12;
			db_start = db_start + 12;
			load_table();
		}
	}else{
		if (db_start != 0) {
			where_we_now = where_we_now - 12;
			db_start = db_start - 12;
			load_table();
		}
	}
}
//call server to get table view
function load_table(){
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
     	 		db_data = (JSON.parse(this.responseText));
     	 		show_table();
    		}
  		};
  		var data = new Array();
  		data.push(true, db_start)
  		//send data
  		xhttp.open("POST", "config/controler.php", true);
  		xhttp.setRequestHeader("Content-type", "application/json");
  		xhttp.send(JSON.stringify(data));
}
//animate table to screen
function show_table(){
	var db_table = document.getElementById("db_table");

	//delete previus content
	db_table.innerHTML = '';

	//add td
	db_table.innerHTML = `
		<tr>
    		<th class="db_th">Faktor 1</th>
    		<th class="db_th">Faktor 2</th>
    		<th class="db_th">Operacija</th>
    		<th>Rezultat</th>
    	</tr>
	`

	//add content to table
	for(i=0; i < db_data[0].length; i++){
		db_table.innerHTML += `
			<tr>
				<td>${db_data[0][i].factor1}</td>
				<td>${db_data[0][i].factor2}</td>
				<td>${db_data[0][i].operation}</td>
				<td>${db_data[0][i].result}</td>
			</tr>
		`
	}
}
