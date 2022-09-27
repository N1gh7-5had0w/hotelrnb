<html>
<head>
<meta http-equiv="refresh" content="1 url=Page_Room.html"/>
    <?php    
    require_once "crudrooms.php";
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
    $rno = $_POST["rno"];
    $rtype = $_POST["rtype"];
    $bedcount = $_POST["bedcount"];
    $rprice = $_POST["rprice"];
    $result = InsertQuery($rno,$rtype,$bedcount,$rprice);
  }
  if(isset($_POST["modify"]))
  {
    $rno = $_POST["rno"];
    $rtype = $_POST["rtype"];
    $bedcount = $_POST["bedcount"];
    $rprice = $_POST["rprice"];
    $result = UpdateQuery("rtype",$rtype,"bedcount",$bedcount,"rprice",$rprice,$rno);
  }
  if(isset($_POST["remove"]))
  {
    $rno = $_POST["rno"];
    $result = DeleteQuery($rno);
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