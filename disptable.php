<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="tables.css">
	<link rel="stylesheet" href="tabledisp.css">
	<title> Hotel Atlanta </title>
	<?php
		require_once "crudtable.php";
	?>
<style>
a.jump:link, a:visited {
  border: 3px solid khaki;
}

a.jump:hover, a:active {
  background-color: khaki;
}  
table.form	 {
	background-color: khaki;
}
td.textinput {
	text-align: center;
}
#disp td, #disp th {
	border: 1px solid khaki;
}
#disp th {
	background-color: khaki;
}
.button {
		display: inline-block;
}
</style>
</head>

<body>
<?php	
	$sql = "Select * from tables";
	$result = selecttable($sql);
	//$result = $conn->query($sql);	?>
<div align="center"> <h1> Hotel Reservation & Booking System </h1> </div>
<div align="center" style="margin-top:50px">
	<h1>
	<a href="Page_Customer.html" class="jump"> Customer &ensp; </a>
	<a href="Page_Table.html" class="jump"> Table &ensp; </a>
	<a href="Page_Room.html" class="jump"> Room &ensp; </a>
	<a href="Page_Reserves.php" class="jump"> Reserves &ensp; </a>
	<a href="Page_Books.php" class="jump"> Books &ensp; </a>
<!--	<a href="Page_Bill.html" class="jump"> Bill &ensp; </a>	-->
	</h1>
	<br> <br> <br>

<div id="scroll">
<table id="disp">
<tr> <th> Table Number </th>	<th> Head Count </th> </tr>
<?php		
		if ($result->num_rows > 0)
		{
		while($row = $result->fetch_assoc())
			{
 echo "<tr><td>" . $row["tno"]. "</td><td>" . $row["tsize"]. "</td></tr>";
			}
		echo "</table>";
		}
	else
		{
		echo "0 Result";
		}
?>
</div>
	<br> <br> <br>
	<a class="button" href="index.php"><button> Main Menu </button></a> &emsp;
	<form class="button" action="indexdisp.php" method="post">	
	<select name="attr">
	<option value="attr" selected> Display A Table </option>
	<option value="customer"> Customer </option>
	<option value="table"> Table </option>
	<option value="rooms"> Rooms </option>
	<option value="reserves"> Reserves </option>
	<option value="books"> Books </option>
	<option value="bill"> Bill </option>
	</select>
	<input type="submit" name="submit" value="Display">	</form>

</div>
</div>
</body>
</html>