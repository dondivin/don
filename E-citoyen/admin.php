<?php
include 'conn.php';

$userID = $_GET['userID'];
$post = $_GET['post'];
$province = $_GET['prov'];
$commune = $_GET['com'];
$zone = $_GET['zone'];
$nom;
$prenom;
$find = "SELECT * FROM accounts WHERE userID = '$userID'";
$found = mysqli_query($conn, $find);
if(mysqli_num_rows($found)>0){
    foreach($found as $row){
        $nom = $row['nom'];
        $prenom = $row['prenom'];
    }
}
$sql = "UPDATE accounts SET type_account = ? WHERE userID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("si",$post ,$userID);
$stmt->execute();
$stmt->close();

$req = "INSERT INTO systpost(nomGov,prenomGov,post,province_post,commune_post,zone_post,userID) VALUES(?,?,?,?,?,?,?)";
$stmt1 = $conn->prepare($req);
$stmt1->bind_param("ssssssi",$nom ,$prenom ,$post ,$province ,$commune ,$zone,$userID);
$stmt1->execute();
$stmt1->close();
echo "Successfully changed";

$conn->close();

?>