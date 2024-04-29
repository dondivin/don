
<?php
session_start();
echo $_POST['name'];
if(isset($_POST['send'])){
$_SESSION['user'] = $_POST['name'];

if(isset($_SESSION['user'])){
        echo 'connected';
        header('location:sessionlogout.php');
}else{
        echo 'not connected';
}
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
    <form action="" method="post">
    <input type="text" name="name" id="" placeholder="name" style="
        
        width: 200px;
        height: 70px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
text-align: center;
font-size: 140%;
color: dodgerblue;
font-weight: 700;
        
        ">
        <button type="submit" style="
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
        
        " name="send">Send</button>
        </form>
</body>
</html>