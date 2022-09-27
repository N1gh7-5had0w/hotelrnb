<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="tables.css">
	<title> Hotel Atlanta </title>
	<?php
		require_once "crudbooks.php";
	?>
<style>
a.jump:link, a:visited {
  border: 3px solid lightgreen;
}

a.jump:hover, a:active {
  background-color: lightgreen;
}  
table {
	background-color: lightgreen;
}
.button {
	display: inline-block;
}
</style>
</head>


<body>
<?php	
	$sql1 = "Select rno from rooms";
	$resultr = selectbooks($sql1);
	$sql2 = "Select cid, cadd from customer";
	$resultc = selectbooks($sql2);
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
<!--	<table>
	 <tr></tr>
	 <tr></tr>
	 <tr></tr>
	 <tr></tr>
	 <tr></tr>
	 </table> -->
	<table class="form">
	<form action="indexbooks.php" method="post">
	 <tr>	<td><label for="cid"> Customer's E-Mail: &emsp; </label></td>
	 <td class="textinput"><select name="cid">
		 		<option value=""> Select a customer </option>
<?php		
		if ($resultc->num_rows > 0)
		{
		while($row = $resultc->fetch_assoc())
			{
  echo "<option value='" . $row['cid'] ."'>" . $row['cadd'] ."</option>";
			}	
		}
?>							</select></td></tr>	 
<!--		<td class="textinput"><input type="text" name="cid"></td></tr>	-->
	 <tr>	<td><label for="rno"> Room Number: &emsp; </label></td>
	 <td class="textinput"><select name="rno">
		 		<option value=""> Select a room </option>
<?php		
		if ($resultr->num_rows > 0)
		{
		while($row = $resultr->fetch_assoc())
			{
  echo "<option value='" . $row['rno'] ."'>" . $row['rno'] ."</option>";
			}	
		}
?>							</select></td></tr>
<!--		<td class="textinput"><input type="text" name="rno"></td></tr>	-->
	 <tr>	<td><label for="checkin"> Date of Check-In: &emsp; </label></td>
		<td class="textinput"><input type="date" name="checkin"></td></tr>
	 <tr>	<td><label for="days"> Number of Days: &emsp; </label></td>
		<td class="textinput"><input type="text" name="days"></td></tr>
	 <tr>
	 <td align="center">
		<select name="attr">
		<option value="attr" selected> Attribute To Modify </option>
		<option value="ddcid"> Customer's ID </option>
		<option value="ddrno"> Room Number </option>
		<option value="ddcheckin"> Check-In Date </option>
		<option value="dddays"> Number Of Days </option>
	 <select> </td> 	 
	<td align="center">		<input type="submit" name="add" value="Add"></button>
					<input type="submit" name="modify" value="Modify">
					<input type="submit" name="remove" value="Remove"></td>	
<!--	<td></td><td align="center" >	<input type="submit" value="Add">
					<input type="submit" value="Modify">
					<input type="submit" value="Remove"></td>	-->
	</tr>
<!--	 <tr><td> Customer's Address: </td>	<td> </td>	</tr>
	 <tr><td> Customer's Phone: </td>	<td> </td>	</tr>
	 <tr><td> Customer's E-mail: </td>	<td> </td>	</tr>
	 <tr><td> &ensp;			<td> </td>	</tr> -->
	</form> 
	</table>
<!--	<a href="Page_Table.html" class="form" style="position:relative; left:190px; top:10px;"> <button> Table </button> </a> &emsp;
	<a href="Page_Bill.html" class="form" style="position:relative; left:190px; top:10px;"> <button> Bill</button> </a> &emsp;
	<a href="Page_Books.html" class="form" style="position:relative; left:190px; top:10px;"> <button> Books </button> </a> &emsp;	-->
</form>
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
</body>

</html>