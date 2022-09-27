<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="1; url=index.html"/>
<title> Hotel R&B System </title>
</head>
<body> <center>

    <?php
    include 'dbconnection.php';
    $conn = openconn();
    echo "Connected Successfully";
    closeconn($conn);
    ?>

</body>
</html>