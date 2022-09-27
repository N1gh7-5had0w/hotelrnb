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
    } 32nd Line */
    function InsertBill($bid,$cid,$tprice,$bdate)
    {
      $conn = openconn();
      $query = $conn->prepare("INSERT INTO bill(bid,cid,tprice,bdate) VALUES ('',?,?,?)");
      $query->bind_param("iis",$cid,$tprice,$bdate);	
      
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
    function UpdateBill($column1,$value1,$column2,$value2,$column3,$value3,$bid)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE bill SET $column1 = ?, $column2 = ?, $column3 = ? WHERE bid = ?");
    $query->bind_param("iisi",$value1,$value2,$value3,$bid);
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
    function UpdateBills($column1,$value1,$column2,$value2,$column3,$value3,$bid)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE bill SET $column1 = ?, $column2 = ?, $column3 = ? WHERE bid = ?");
    $query->bind_param("iisi",$value1,$value2,$value3,$bid);
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
    function DeleteBill($bid)
    {
    $conn = openconn();
      $query = $conn->prepare("DELETE FROM bill WHERE bid = ?");
      $query->bind_param("i",$bid);
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
    function selectbill($sql)
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