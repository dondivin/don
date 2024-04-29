
<?php
session_start();
include 'conn.php';

$req = 'select *from accounts';
$res = mysqli_query($conn,$req);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            width: 100vw;
            height: 100vh;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        select{
            width: 300px;
            height: 70px;
            font-size: 100%;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            font-weight: 700;
            color: deepskyblue;
            border: 3px solid deepskyblue;
            border-radius: 10px;
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <select name="" id="">
            <?php
             if(mysqli_num_rows($res)>0){
                foreach($res as $row){
            ?>
            <option value="<?=$row['email']?>"><?=$row['email']?></option>

            <?php
                }
                ?>
                <?php
                }
                ?> 
        </select>
    </div>
</body>
</html>