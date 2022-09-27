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
    function InsertQuery($tno,$tsize)
    {
      $conn = openconn();
      $query = $conn->prepare("INSERT INTO tables(tno,tsize) VALUES (?,?)");
      $query->bind_param("si",$tno,$tsize);
      
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
    function UpdateQuery($column1,$value1,$tno)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE tables SET $column1 = ? WHERE tno = ?");
    $query->bind_param("is",$value1,$tno);
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
    function DeleteQuery($tno)
    {
    $conn = openconn();
      $query = $conn->prepare("DELETE FROM tables WHERE tno = ?");
      $query->bind_param("s",$tno);
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
    function selecttable($sql)
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