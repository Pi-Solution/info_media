<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="load_table();">
	<header>
		<h1 id="header1">TABELARNI KALKULATOR</h1>
	</header>

	<div class="table_div">
	<table>
  		<tr>
    		<th></th>
    		<th id="colum1" class="table_cell"></th>
    		<th id="colum2" class="table_cell"></th>
    		<th id="colum3" class="table_cell"></th>
    		<th id="colum4" class="table_cell"></th>
    		<th id="colum5" class="table_cell"></th>
    		<th id="colum6" class="table_cell"></th>
    		<th id="colum7" class="table_cell"></th>
    		<th id="colum8" class="table_cell"></th>
    		<th id="colum9" class="table_cell"></th>
    		<th id="colum10" class="table_cell"></th>
  		</tr>
  		<tr>
  			<td class="first" id="row1"></td>
    		<td id="c1r1" class="table_cell"></td>
    		<td id="c2r1" class="table_cell"></td>
    		<td id="c3r1" class="table_cell"></td>
    		<td id="c4r1" class="table_cell"></td>
    		<td id="c5r1" class="table_cell"></td>
    		<td id="c6r1" class="table_cell"></td>
    		<td id="c7r1" class="table_cell"></td>
    		<td id="c8r1" class="table_cell"></td>
    		<td id="c9r1" class="table_cell"></td>
    		<td id="c10r1" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row2"></td>
    		<td id="c1r2" class="table_cell"></td>
    		<td id="c2r2" class="table_cell"></td>
    		<td id="c3r2" class="table_cell"></td>
    		<td id="c4r2" class="table_cell"></td>
    		<td id="c5r2" class="table_cell"></td>
    		<td id="c6r2" class="table_cell"></td>
    		<td id="c7r2" class="table_cell"></td>
    		<td id="c8r2" class="table_cell"></td>
    		<td id="c9r2" class="table_cell"></td>
    		<td id="c10r2" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row3"></td>
    		<td id="c1r3" class="table_cell"></td>
    		<td id="c2r3" class="table_cell"></td>
    		<td id="c3r3" class="table_cell"></td>
    		<td id="c4r3" class="table_cell"></td>
    		<td id="c5r3" class="table_cell"></td>
    		<td id="c6r3" class="table_cell"></td>
    		<td id="c7r3" class="table_cell"></td>
    		<td id="c8r3" class="table_cell"></td>
    		<td id="c9r3" class="table_cell"></td>
    		<td id="c10r3" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row4"></td>
    		<td id="c1r4" class="table_cell"></td>
    		<td id="c2r4" class="table_cell"></td>
    		<td id="c3r4" class="table_cell"></td>
    		<td id="c4r4" class="table_cell"></td>
    		<td id="c5r4" class="table_cell"></td>
    		<td id="c6r4" class="table_cell"></td>
    		<td id="c7r4" class="table_cell"></td>
    		<td id="c8r4" class="table_cell"></td>
    		<td id="c9r4" class="table_cell"></td>
    		<td id="c10r4" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row5"></td>
    		<td id="c1r5" class="table_cell"></td>
    		<td id="c2r5" class="table_cell"></td>
    		<td id="c3r5" class="table_cell"></td>
    		<td id="c4r5" class="table_cell"></td>
    		<td id="c5r5" class="table_cell"></td>
    		<td id="c6r5" class="table_cell"></td>
    		<td id="c7r5" class="table_cell"></td>
    		<td id="c8r5" class="table_cell"></td>
    		<td id="c9r5" class="table_cell"></td>
    		<td id="c10r5" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row6"></td>
    		<td id="c1r6" class="table_cell"></td>
    		<td id="c2r6" class="table_cell"></td>
    		<td id="c3r6" class="table_cell"></td>
    		<td id="c4r6" class="table_cell"></td>
    		<td id="c5r6" class="table_cell"></td>
    		<td id="c6r6" class="table_cell"></td>
    		<td id="c7r6" class="table_cell"></td>
    		<td id="c8r6" class="table_cell"></td>
    		<td id="c9r6" class="table_cell"></td>
    		<td id="c10r6" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row7"></td>
    		<td id="c1r7" class="table_cell"></td>
    		<td id="c2r7" class="table_cell"></td>
    		<td id="c3r7" class="table_cell"></td>
    		<td id="c4r7" class="table_cell"></td>
    		<td id="c5r7" class="table_cell"></td>
    		<td id="c6r7" class="table_cell"></td>
    		<td id="c7r7" class="table_cell"></td>
    		<td id="c8r7" class="table_cell"></td>
    		<td id="c9r7" class="table_cell"></td>
    		<td id="c10r7" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row8"></td>
    		<td id="c1r8" class="table_cell"></td>
    		<td id="c2r8" class="table_cell"></td>
    		<td id="c3r8" class="table_cell"></td>
    		<td id="c4r8" class="table_cell"></td>
    		<td id="c5r8" class="table_cell"></td>
    		<td id="c6r8" class="table_cell"></td>
    		<td id="c7r8" class="table_cell"></td>
    		<td id="c8r8" class="table_cell"></td>
    		<td id="c9r8" class="table_cell"></td>
    		<td id="c10r8" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row9"></td>
    		<td id="c1r9" class="table_cell"></td>
    		<td id="c2r9" class="table_cell"></td>
    		<td id="c3r9" class="table_cell"></td>
    		<td id="c4r9" class="table_cell"></td>
    		<td id="c5r9" class="table_cell"></td>
    		<td id="c6r9" class="table_cell"></td>
    		<td id="c7r9" class="table_cell"></td>
    		<td id="c8r9" class="table_cell"></td>
    		<td id="c9r9" class="table_cell"></td>
    		<td id="c10r9" class="table_cell"></td>
  		</tr>
  		<tr>
  			<td class="first" id="row10"></td>
    		<td id="c1r10" class="table_cell"></td>
    		<td id="c2r10" class="table_cell"></td>
    		<td id="c3r10" class="table_cell"></td>
    		<td id="c4r10" class="table_cell"></td>
    		<td id="c5r10" class="table_cell"></td>
    		<td id="c6r10" class="table_cell"></td>
    		<td id="c7r10" class="table_cell"></td>
    		<td id="c8r10" class="table_cell"></td>
    		<td id="c9r10" class="table_cell"></td>
    		<td id="c10r10" class="table_cell"></td>
  		</tr>
	</table>
		<div id="control_buttons">
			<button class="operation_button" id="add_numb" onclick="get_numb();">DODAJ BROJ</button>

			<input class="operation_button" id="number_value" type="number" name="number_value" onfocus="this.value=''">

			<button class="operation_button" id="add" onclick="last_operation = this.value;send_to_server(false);" value="add">SABERI</button>

			<button class="operation_button" id="sub" onclick="last_operation = this.value;send_to_server(false);" value="sub">ODUZMI</button>

			<button class="operation_button" id="mult" onclick="last_operation = this.value;send_to_server(false);" value="mult">POMNOŽI</button>

			<button class="operation_button" id="split" onclick="last_operation = this.value;send_to_server(false);" value="split">PODIJELI</button>

			<button class="operation_button" id="save_to_db" onclick="send_to_server(true);">SAČUVAJ</button>

			<button class="operation_button" id="delete_table" onclick="delete_from_table();">Obriši tabelu</button>
		</div>
	</div>

	<div class="textbox_db">
		<button onclick="load_table();">show</button>
		<div id="box">
			<p id="box-text"></p>
		</div>
		<div id="db_results">
			<div id="table_parent">
				<table id="db_table">
					<tr>
    					<th class="db_th">Faktor 1</th>
    					<th class="db_th">Faktor 2</th>
    					<th class="db_th">Operacija</th>
    					<th>Rezultat</th>
    				</tr>
    			</table>
    		</div>
    		<div id="db_control">
    			<button class="db_button" onclick="from_where_db('sub');"><</button>
    			<button class="db_button" onclick="from_where_db('add');">></button>
    		</div>
		</div>
	</div>

</script>
<script type="text/javascript" src="js/calculator.js" ></script>
</body>
</html>