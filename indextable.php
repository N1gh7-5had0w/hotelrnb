<html>
<head>
<meta http-equiv="refresh" content="1 url=Page_Table.html"/>
    <?php    
    require_once "crudtable.php";
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
    $tno = $_POST["tno"];
    $tsize = $_POST["tsize"];
/*  $fprice = $_POST["fprice"];	*/
    $result = InsertQuery($tno,$tsize);
  }
  if(isset($_POST["modify"]))
  {
    $tno = $_POST["tno"];
    $tsize = $_POST["tsize"];
/*  $fprice = $_POST["fprice"];	*/
    $result = UpdateQuery("tsize",$tsize,$tno);
  }
  if(isset($_POST["remove"]))
  {
    $tno = $_POST["tno"];
    $result = DeleteQuery($tno);
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