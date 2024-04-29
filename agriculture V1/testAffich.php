

<?php
include 'conn.php';
$sql = "select * from rapport where year(date) = 2023";
$res = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
      body{
        background-color: aliceblue;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;

      }
      div{
        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
      }
      h1{
        font-size: 20px;
        font-weight: 700;
        color: dodgerblue;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
      <?php
      if(mysqli_num_rows($res)>0){
        foreach($res as $row){
      ?>
        <h1><?=$row['user']?></h1>
        <?php
        }
        ?>
         <?php
        }
        ?>
    </div>
</body>
</html>