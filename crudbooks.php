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
    function Updatecid($column1,$value1,$value2,$value3)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE books SET $column1=? WHERE rno=? and checkin=?");
    $query->bind_param("iss",$value1,$value2,$value3);
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

//UPDATING RNO
    function Updaterno($column1,$value1,$value2,$value3)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE books SET $column1=? WHERE cid=? and checkin=?");
    $query->bind_param("sis",$value1,$value2,$value3);
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

//UPDATING CHECKIN
    function Updatecheckin($column1,$value1,$value2,$value3)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE books SET $column1=? WHERE cid=? and rno=?");
    $query->bind_param("sis",$value1,$value2,$value3);
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

//UPDATING DAYS
    function Updatedays($column1,$value1,$value2,$value3,$value4)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE books SET $column1=? WHERE cid=? and rno=? and checkin=?");
    $query->bind_param("iiss",$value1,$value2,$value3,$value4);
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

    function InsertQuery($cid,$rno,$checkin,$days)
    {
      $conn = openconn();
      $query = $conn->prepare("INSERT INTO books(cid,rno,checkin,days) VALUES (?,?,?,?)");
      $query->bind_param("issi",$cid,$rno,$checkin,$days);
      
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

    function DeleteQuery($cid,$rno,$checkin)
    {
    $conn = openconn();
      $query = $conn->prepare("DELETE FROM books WHERE cid = ? and rno = ? and checkin = ?");
      $query->bind_param("iss",$cid,$rno,$checkin);
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
    function selectbooks($sql)
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