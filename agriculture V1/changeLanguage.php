<?php
session_start();
include 'conn.php';

//include "profil.php";
$id_user = $_SESSION['user'];

$req = mysqli_query($conn,"select * from setlang where id_code = '$id_user'");



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
            width: 100vw;
            height: 100vh;
            display: flex;
            background-color: aliceblue;
            justify-content: center;
            align-items: center;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ururimi</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    <?php
if(mysqli_num_rows($req)>0){
    foreach($req as $row){
    ?>
    <form action="setLang.php?" method="post">
    <div class="radio">
        <h1>FRANCAIS</h1>
        <input type="text" id="rad" name="mode" value="<?=$row['mode']?>" maxlength="3" class="radios" hidden>
        <div class="rad">
            <div class="radi">
            </div>
        </div>
        <div class="btn">
            <button type="submit">Appliquer</button>
        </div>
    </div>
</form>
<?php
    }
}else{
    ?>
 <form action="setLang.php?" method="post">
    <div class="radio">
        <h1>FRANCAIS</h1>
        <input type="text" id="rad" name="mode" value="off" maxlength="3" class="radios" hidden>
        <div class="rad">
            <div class="radi">
            </div>
        </div>
        <div class="btn">
            <button type="submit">Appliquer</button>
        </div>
    </div>
</form>

<?php
}
?>
</body>
<script src="js/setLang.js"></script>
</html>

