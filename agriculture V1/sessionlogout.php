
<?php
session_start();
echo $_SESSION['user'];
if(isset($_SESSION['user'])){
    echo 'you have loged';
}else{
    echo 'not loged'; 
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
    <form action="logout.php" method="post">
        <button type="submit" name="logout" style="
            
            width: 200px;
        height: 50px;
        border-radius: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.288);
        border: none;
        color: aliceblue;
        font-weight: 900;
        font-size: 120%;
        background-color: dodgerblue;
        position: absolute;
top: 60%;
left: 50%;
transform: translate(-50%,-50%);
            
            
            ">Logout</button>
    </form>
</body>
</html>