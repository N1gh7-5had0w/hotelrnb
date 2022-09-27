<html>
<head>
<meta http-equiv="refresh" content="1 url=Page_Bill.html"/>
    <?php    
    require_once "crudbill.php";
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
  if(isset($_POST["add"]))
  {
    $bid = $_POST["bid"];
    $cid = $_POST["cid"];
    $tprice = $_POST["tprice"];
    $bdate = $_POST["bdate"];
    $result = InsertQuery($bid,$cid,$tprice,$bdate);
  }
  if(isset($_POST["modify"]))
  {
    $bid = $_POST["bid"];
    $cid = $_POST["cid"];
    $tprice = $_POST["tprice"];
    $bdate = $_POST["bdate"];
    $result = UpdateQuery("cid",$cid,"tprice",$tprice,"bdate",$bdate,$bid);
  }
  if(isset($_POST["remove"]))
  {
    $bid = $_POST["bid"];
    $result = DeleteQuery($bid);
  }
    if($result === true)
    {
	echo 'success';
    }
    else
    {
	echo $result;
    }
?>
</head>
</html>