
<?php

session_start();

if(isset($_POST['prod'])){
    $_SESSION['type'] = 'producteur';
    header('location:log.php');
};
if(isset($_POST['sema'])){
    $_SESSION['type'] = 'multiplicateur';
    header('location:log.php');
};

if(isset($_POST['elevage'])){
    $_SESSION['type'] = 'eleveur';
    header('location:log.php');
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/chose.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose</title>
</head>
<body>
    <form method="post">
    <div class="type">
        <label for="">Hitamwo</label>
       
        <button name="prod">Umugwiza mwimbu</button>
       
        <button name="sema">Umugwiza mbuto</button>
        
        <button name="elevage">Umworozi</button>
    </div>
    </form>
</body>
</html>