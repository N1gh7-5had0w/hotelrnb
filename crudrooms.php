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
    function InsertQuery($rno,$rtype,$bedcount,$rprice)
    {
      $conn = openconn();
      $query = $conn->prepare("INSERT INTO rooms(rno,rtype,bedcount,rprice) VALUES (?,?,?,?)");
      $query->bind_param("ssii",$rno,$rtype,$bedcount,$rprice);
      
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
    function UpdateQuery($column1,$value1,$column2,$value2,$column3,$value3,$rno)
    {
    $conn = openconn();
    $query = $conn->prepare("UPDATE rooms SET $column1 = ?, $column2 = ?, $column3 = ? WHERE rno = ?");
    $query->bind_param("sisi",$value1,$value2,$value3,$rno);
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
    function DeleteQuery($rno)
    {
    $conn = openconn();
      $query = $conn->prepare("DELETE FROM rooms WHERE rno = ?");
      $query->bind_param("s",$rno);
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
    function selectrooms($sql)
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