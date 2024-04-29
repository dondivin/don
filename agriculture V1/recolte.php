<?php





session_start();
$id_user = $_SESSION['user'];

if(isset($_SESSION['user'])){
    include('conn.php');

if(isset($_POST['sendSem'])){

$semance = $_POST['sem'];
$semanceCert = $_POST['semCert'];
$dateSem =$_POST['date'];

$semanceSanitized =mysqli_real_escape_string($conn,$semance);
$semanceCertSanitized =mysqli_real_escape_string($conn,$semanceCert);
$dateSemSanitized = mysqli_real_escape_string($conn,$dateSem);



    $req = "insert into recolt_semance(id_code,semance,semanceCert,date) values(?,?,?,?)";
    $stmt = $conn->prepare($req);
    $stmt->bind_param("ssss",$id_user ,$semanceSanitized ,$semanceCertSanitized ,$dateSemSanitized);
    $stmt->execute();
    header('location:myactivity.php');
    $conn->close();
    $stmt->close();
};

if(isset($_POST['sendProd'])){

    $prod = $_POST['prod'];
    $dateProd =$_POST['dateProd'];
    
    $produitSanitized =mysqli_real_escape_string($conn,$prod);
    $dateProdSanitized = mysqli_real_escape_string($conn,$dateProd);
    
    echo $prod;
    
        $req = "insert into recolt_produit(id_code,produit,date) values(?,?,?)";
        $stmt = $conn->prepare($req);
        $stmt->bind_param("sss",$id_user ,$produitSanitized ,$dateProdSanitized);
        $stmt->execute();
        header('location:myactivity.php');
        $conn->close();
        $stmt->close();
    };







$sql = "select * from personal where id_code = '$id_user'";

$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
  



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reco.css">
    <title>Quantinte</title>
</head>

<body>

<?php
  foreach ($res as $row) {
    if($row['typ_agriculteur']=== 'Umugwizambuto'){
        


?>

<form action="" method="post">

    <div class="recol">
        <div class="title">
            <h1>Umwimbu</h1>
        </div>
        <div class="sem">
            <p>Ivyimbuwe</p>
            <input type="text" name="sem" id="sem">
        </div>
        <div class="semCert">
            <p>ivyimbuwe vyemejwe na oncss</p>
            <input type="text" name="semCert" id="semCert">
        </div>
        <div class="date">
            <p></p>
            <input type="date" name="date" id="date">
        </div>
        <div class="btn">
            <button type="submit" name="sendSem">Kurungika</button>
        </div>
    </div>
    </form>
<?php
    }else if($row['typ_agriculteur']==='Umurimyi'){


?>
<form action="" method="post">
    <div class="recol" id="recol">
        <div class="title">
            <h1>Umwimbu</h1>
        </div>
        <div class="sem">
            <p>Ivyimbuwe</p>
            <input type="text" name="prod" id="sem">
        </div>
        <div class="date">
            <p></p>
            <input type="date" name="dateProd" id="date">
        </div>
        <div class="btn">
            <button type="submit" name="sendProd">Kurungika</button>
        </div>
    </div>
    </form>
    <?php
    }else{
        header("location:formulaire.php"); 
    }
};
    ?>
  

</body>
<script src="js/recol.js"></script>

</html>
<?php
}else{
header("location:formulaire.php");
}
}
?>