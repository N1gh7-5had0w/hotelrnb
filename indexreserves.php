<html>
<head>
<meta http-equiv="refresh" content="1	 url=Page_Reserves.php"/>
    <?php    
    require_once "crudreserves.php";
    require_once "crudbill.php";
    require_once "dbconnection.php";
	$conn = openconn();
/*  $sql = "INSERT INTO customer(cid,cname,cadd) VALUES ('C07','Widow','scarlett@johansenn.com')";
    $result = SingleQuery($sql);
    if($result === true)
    {
      echo 'success';
      
    }
    else
    {
      echo $result;
    } */
/*  $sql = "INSERT INTO customer(cid,cname,cadd) VALUES ('C02','Luke','jedi@skywalker.com')";
    $sql .= "INSERT INTO customer(cid,cname,cadd) VALUES ('C03','Emia','corrupted@diseases.com')";
    $sql .= "INSERT INTO customer(cid,cname,cadd) VALUES ('C04','Tony','iron@man.com')";
    $result = MultiQuery($sql);
    if($result === true)
    {
	 echo 'success';
    }
    else
    {
	echo $result;
    } */
/*  $cid = "Ahmed";
    $cname = "Khan";
    $cadd = "ahmed.khan@cloudways.com"; 31st LINE */
$flag = 0;
  if(isset($_POST["add"]))
  {
    $cid = $_POST["cid"];
    $tno = $_POST["tno"];
    $booking_date = $_POST["booking_date"];
    $booked_time = $_POST["booked_time"];
    $fprice = $_POST["fprice"];

    $bid = 0;
    $tprice = $fprice;
    $bdate = $booking_date;
    $result = InsertQuery($cid,$tno,$booking_date,$booked_time,$fprice);
    $resultbill = InsertBill($bid,$cid,$tprice,$bdate);
  }
  if(isset($_POST["modify"]))
  {
    $cid = $_POST["cid"];
    $tno = $_POST["tno"];
    $booking_date = $_POST["booking_date"];
    $booked_time = $_POST["booked_time"];
    $fprice = $_POST["fprice"];
    $attr = $_POST["attr"];

    $bid = 0;
    $tprice = $fprice;
    $bdate = $booking_date;
    if($attr === "attr")
    {	echo "Select an attribute";	
	$flag = 1;			}
    if($attr === "ddcid")
    {	$result = Updatecid("cid",$cid,$tno,$booking_date,$booked_time); }
    if($attr === "ddtno")
    {	$result = Updatetno("tno",$tno,$cid,$booking_date,$booked_time); }
    if($attr === "ddbooking_date")
    {	$result = Updatedate("booking_date",$booking_date,$cid,$tno,$booked_time); }
    if($attr === "ddbooked_time")
    {	$result = Updatetime("booked_time",$booked_time,$cid,$tno,$booking_date); }
    if($attr === "ddfprice")
    {	$result = Updateprice("fprice",$fprice,$cid,$tno,$booking_date,$booked_time); }
	$resultbill = InsertBill($bid,$cid,$tprice,$bdate);
}
/*  $result = UpdateQuery("cname",$cname,"cadd",$cadd,$cid); */
  
  if(isset($_POST["remove"]))
  {
    $cid = $_POST["cid"];
    $tno = $_POST["tno"];
    $booking_date = $_POST["booking_date"];
    $booked_time = $_POST["booked_time"];
    $result = DeleteQuery($cid,$tno,$booking_date,$booked_time);

  }
			if($flag === 1) { return 0; }
			else 	{
    if($result === true)
    {
	echo 'success';
    }
    else
    {
	echo $result;
    }				}
?>
</head>
</html>