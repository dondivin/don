<?php
include("conn.php");
$id = 300;
$sql = "select * from accounts where id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();
if(mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
        echo $row['email'];
        echo $row['password'];
    }
}else{
    echo "No data was found";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
</body>
</html>