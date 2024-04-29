
<?php
session_start();
include 'conn.php';
$id_user = $_SESSION['user'];
$id_rap = $_GET['id_rap'];


if(isset($_SESSION['user'])){

    $idSanitiser = mysqli_real_escape_string($conn,$id_rap);

$sql = mysqli_query($conn,"select * from rapport where id = '".$idSanitiser."' AND id_code = '$id_user'");
if(mysqli_num_rows($sql)>0){
    foreach($sql as $row){

//echo $row['province'];

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
            color: dodgerblue;
        }
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
    <link rel="stylesheet" href="css/update.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    <form action="uptd.php?id_rap=<?=$id_rap?>" method="post">
        <div class="head">
            <h1>GUHINDURA</h1>
        </div>
        <div>
            <label for="">INTARA</label>
            <input type="text" name="prov" value="<?=$row['province']?>" id="">
        </div>
        <div>
            <label for="">IKOMINE</label>
            <input type="text" name="com" value="<?=$row['commune']?>" id="">
        </div>
        <div>
            <label for="">UMUTUMBA</label>
            <input type="text" name="coll" value="<?=$row['colline']?>" id="">
        </div>
        <div>
            <label for="">UBWOKO BW'IGITEGWA</label>
            <input type="text" name="typ_cul" value="<?=$row['type_culture']?>" id="">
        </div>
        <div class="sper">
            <label for="">UKO HANGANA</label>
            <input type="number" name="sper" value="<?=$row['sperficie']?>" id="">
            <input type="text" name="mesure" value="<?=$row['mesure']?>" id="">
        </div>
        <div>
            <label for="">UBWOKO</label>
            <input type="text" name="categ" value="<?=$row['categorie']?>" id="">
        </div>
        <div>
            <label for="">IGICE C'IRIMA</label>
            <input type="text" name="saison" value="<?=$row['saison']?>" maxlength="1" id="">
        </div>
        <div class="btn">
            <button type="submit">GUHINDURA</button>
        </div>
    </form>
</body>
</html>

<?php
    }
}
?>
<?php
}else{
    echo "Loging first";

   // echo '<a href="index.php">Login</a>';
   header('location:noAccount.html');

}
?>