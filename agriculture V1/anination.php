
<?php

$var = 2;

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            background-color: aliceblue;
        }
       
    </style>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($var === 2){
        
        echo '<div class="anime">
        <div class="img">
            <img src="icon/verify.png" alt="">
        </div>
    </div>';

    }else{
        echo '<div class="anime1">
        <div class="img">
            <img src="icon/notVerified.svg" alt="">
        </div>
    </div>';
    };
    ?>
  

   
</body>
</html>