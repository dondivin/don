
<?php

$user = 'root';
$pass = '';
$db = 'test';
$host = 'localhost';

$conn = new mysqli($host ,$user ,$pass ,$db) or die("cannot connect to $db");

if(isset($_REQUEST['btn'])){
$name = $_REQUEST['text'];
//echo "<script>alert('$name')</script>";

$sql = "INSERT into accounts(email) value('$name')";
$res = mysqli_query($conn,$sql);
echo "<script>alert('$name is registered')</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        }
        body{
            background-color: rgb(46, 9, 116);
width: 100vw;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
        }
        div{
            display:flex;
            flex-direction:column;
            justify-content: center;
align-items: center;
        }
        div input{
          width: 400px;
          height: 50px;
          border-radius: 10px;
        border: none;
        border-bottom: 2px solid deepskyblue;
        text-align: center;
        margin-bottom: 50px;
        }
        button{
            width:200px;
            height:50px;
            border:none;
            border-radius:50px;
            background:deepskyblue;
            color:aliceblue;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <div>
        <input type="text" name="text" placeholder="Name" value="don divin" id="">
        <button name="btn">Push</button>
    </div>
    </form>
</body>
</html>