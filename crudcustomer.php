<?php    
    require_once 'dbconnection.php';
/*  function SingleQuery($queri)
    {
      $conn = openconn();
      
      
      if($conn->query($queri) === TRUE)
      {
        closeconn($conn);
        return true;
      }
      else
      {
        return $conn->error;
      }
    } */
/*  function MultiQuery($quries)
    {
      $conn = openconn();
      
      
      if($conn->multi_query($quries) === true)
      {
        closeconn($conn);
        return true;
      }
      else
      {
        return $conn->error;
      }
    } */
    function InsertQuery($cid,$cname,$cadd)
    {
      $conn = openconn();
      $query = $conn->prepare("INSERT INTO customer(cid,cname,cadd) VALUES ('',?,?)");
      $query->bind_param("ss",$cname,$cadd);
      
      if($query->execute())
      {
        closeconn($conn);
        return true;
      }
      else
      {
        return $conn->error;
      }
    }
    function UpdateQuery($column1,$value1,$column2,$value2,$cid)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE customer SET $column1 = ?, $column2 = ? WHERE cid = ?");
    $query->bind_param("ssi",$value1,$value2,$cid);
    if($query->execute())
    {
    closeconn($conn);
    return true;
    }
    else
    {
    return $conn->error;
    }
    }
    function DeleteQuery($cadd)
    {
    $conn = openconn();
      $query = $conn->prepare("DELETE FROM customer WHERE cadd = ?");
      $query->bind_param("s",$cadd);
      //var_dump($query);
      
      if($query->execute())
      {
        closeconn($conn);
        return true;
      }
      else
      {
        return $conn->error;
      }
    }
    function selectcustomer($sql)
    {
      $conn = openconn();
      
      $result = $conn->query($sql);
      if($result)
      {
        if($result->num_rows > 0)
        {
          return $result;
        }
        else
        {
          return "zero";
        }
      }
      else
      {
        return $result->error;
      }
    }
?>