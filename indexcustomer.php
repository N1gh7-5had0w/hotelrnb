<html>
<head>
<meta http-equiv="refresh" content="1 url=Page_Customer.html"/>
    <?php    
    require_once "crudcustomer.php";
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
    $cid = $_POST["cid"];
    $cname = $_POST["cname"];
    $cadd = $_POST["cadd"];
    $result = InsertQuery($cid,$cname,$cadd);
  }
  if(isset($_POST["modify"]))
  {
    $cid = $_POST["cid"];
    $cname = $_POST["cname"];
    $cadd = $_POST["cadd"];
    $result = UpdateQuery("cname",$cname,"cadd",$cadd,$cid);
  }
  if(isset($_POST["remove"]))
  {
    $cadd = $_POST["cadd"];
    $result = DeleteQuery($cadd);
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