<html>
<head>
<meta http-equiv="refresh" content="1 url=Page_Books.php"/>
    <?php    
    require_once "crudbooks.php";
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
$flag=0;
  if(isset($_POST["add"]))
  {
    $cid = $_POST["cid"];
    $rno = $_POST["rno"];
    $checkin = $_POST["checkin"];
    $days = $_POST["days"];
    $result = InsertQuery($cid,$rno,$checkin,$days);
    $roomprice = "Select rprice as price from rooms where rno='$rno'";
    $rmprice = $conn->query($roomprice);
    $row = $rmprice->fetch_assoc();
    $rprice = $row['price'];
    $bid = 0;
    $bdate = $checkin;
    $tprice = $rprice*$days;
    $resultbill = InsertBill($bid,$cid,$tprice,$bdate);	
  }
  if(isset($_POST["modify"]))
  {
    $cid = $_POST["cid"];
    $rno = $_POST["rno"];
    $checkin = $_POST["checkin"];
    $days = $_POST["days"];
    $attr = $_POST["attr"];

    $roomprice = "Select rprice as price from rooms where rno='$rno'";
    $rmprice = $conn->query($roomprice);
    $row = $rmprice->fetch_assoc();
    $rprice = $row['price'];
    $bid = 0;
    $bdate = $checkin;
    $tprice = $rprice*$days;	

    if($attr === "attr")
    {	echo "Select an attribute";	
	$flag = 1;			}
    if($attr === "ddcid")
    {	$result = Updatecid("cid",$cid,$rno,$checkin); 
	$resultbill = InsertBill($bid,$cid,$tprice,$bdate);	}
    if($attr === "ddrno")
    {	$result = Updaterno("rno",$rno,$cid,$checkin); 
	$resultbill = InsertBill($bid,$cid,$tprice,$bdate);	}
    if($attr === "ddcheckin")
    {	$result = Updatecheckin("checkin",$checkin,$cid,$rno);
	$resultbill = InsertBill($bid,$cid,$tprice,$bdate); 	}
    if($attr === "dddays")
    {	$result = Updatedays("days",$days,$cid,$rno,$checkin); 
	$resultbill = InsertBill($bid,$cid,$tprice,$bdate); 	}
  }
  if(isset($_POST["remove"]))
  {
    $cid = $_POST["cid"];
    $rno = $_POST["rno"];
    $checkin = $_POST["checkin"];
    $result = DeleteQuery($cid,$rno,$checkin);
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
    }
				}
?>
</head>
</html>