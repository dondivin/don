<?php
session_start();
$id_user = $_SESSION['user'];
include "conn.php";

$find = "select * from accounts where id_code = '$id_user'";
$found = mysqli_query($conn,$find);
if(mysqli_num_rows($found)>0){
    foreach($found as $row){
        $user = $row['email'];
    }
};

$nom = $_POST['Fname'];
$prenom = $_POST['Fprenom'];
$phone = $_POST['Fphone'];
$email = $_POST['Femail'];
$address = $_POST['Faddress'];
$num_id = $_POST['Fnum_id'];
$gender = $_POST['selectGenre'];
$country = $_POST['Fcountry'];
$profil = $_FILES['file'];
$fileName = $profil['name'];
$typ_agr = $_POST['typ_agr'];



if(isset($_POST['send'])){


//$sql = 'insert into personal(fullName,phone,email,address,Num_id,genre,country,profil,user) values(?,?,?,?,?,?,?,?,?)';
$update = "update personal set pname = '".$nom."',psurname = '".$prenom."',typ_agriculteur = '".$typ_agr."', phone = '".$phone."', email = '".$email."', address = '".$address."', Num_id = '".$num_id."', genre = '".$gender."', country = '".$country."', profil = '".$fileName."' where id_code ='$id_user'";
$updating=$conn->prepare($update);
$updating->execute();
echo "<script>alert('file saved as profil is $fileName')</script>";
header("location:profil.php");
/*$stmt=$conn->prepare($sql);
$stmt->bind_param("sssssssss",$nom ,$phone ,$email ,$address ,$num_id ,$gender ,$country ,$fileName,$user);
$stmt->execute();
echo "<script>alert('file saved as profil is $fileName')</script>";
header("location:profil.php");
$stmt->close();
$conn->close();*/

move_uploaded_file($profil['tmp_name'],'profil/'.$fileName);

}