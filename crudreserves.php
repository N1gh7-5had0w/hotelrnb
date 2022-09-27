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

//UPDATING CID
    function Updatecid($column1,$value1,$value2,$value3,$value4)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE reserves SET $column1=? WHERE tno=? and booking_date=? and booked_time=?");
    $query->bind_param("isss",$value1,$value2,$value3,$value4);
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

//UPDATING TNO
    function Updatetno($column1,$value1,$value2,$value3,$value4)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE reserves SET $column1=? WHERE cid=? and booking_date=? and booked_time=?");
    $query->bind_param("siss",$value1,$value2,$value3,$value4);
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

//UPDATING DATE
    function Updatedate($column1,$value1,$value2,$value3,$value4)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE reserves SET $column1=? WHERE cid=? and tno=? and booked_time=?");
    $query->bind_param("siss",$value1,$value2,$value3,$value4);
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

//UPDATING TIME
    function Updatetime($column1,$value1,$value2,$value3,$value4)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE reserves SET $column1=? WHERE cid=? and tno=? and booking_date=?");
    $query->bind_param("siss",$value1,$value2,$value3,$value4);
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

//UPDATING PRICE
    function Updateprice($column1,$value1,$value2,$value3,$value4,$value5)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE reserves SET $column1=$value1 WHERE cid=? and tno=? and booking_date=? and booked_time=?");
    $query->bind_param("isss",$value2,$value3,$value4,$value5);
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

    function InsertQuery($cid,$tno,$booking_date,$booked_time,$fprice)
    {
      $conn = openconn();
      $query = $conn->prepare("INSERT INTO reserves(cid,tno,booking_date,booked_time,fprice) VALUES (?,?,?,?,?)");
      $query->bind_param("isssi",$cid,$tno,$booking_date,$booked_time,$fprice);
      
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
/*  function UpdateQuery($column1,$value1,$column2,$value2,$cid)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE customer SET $column1 = ?, $column2 = ? WHERE cid = ?");
    $query->bind_param("sss",$value1,$value2,$cid);
    if($query->execute())
    {
    closeconn($conn);
    return true;
    }
    else
    {
    return $conn->error;
    }
    }	*/
    function DeleteQuery($cid,$tno,$booking_date,$booked_time)
    {
    $conn = openconn();
      $query = $conn->prepare("DELETE FROM reserves WHERE cid=? and tno=? and booking_date=? and booked_time=?");
      $query->bind_param("isss",$cid,$tno,$booking_date,$booked_time);
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
    function selectreserves($sql)
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