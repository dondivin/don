
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
    <title><?php echo $id_user ?></title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>

<?php

include("conn.php");
session_start();
$email = $_POST['email'];
$passwrd = $_POST['password'];
$confPass = $_POST['comfirmPswrd'];
$id_code = $_POST['id_code'];
$typ_agri = $_SESSION['type'];

//$req = mysqli_query($conn,"DESCRIBE don");

//$checkTable = mysqli_query($conn,"DESCRIBE don");
/*$sql = "DESCRIBE don";
$stmt = $conn->prepare($sql);
if($stmt->execute()){
    echo "<script>alert('exist')</script>";
}else{
    echo "<script>alert('no table with this name')</script>";
}

/*if($checkTable == false){
    echo "<script>alert('no table with this name')</script>";
}*/
$check = 'select * from accounts';
$res = mysqli_query($conn,$check);
$bool = false;
$id_code_chk = false;

if(isset($_POST['register'])){
    if(mysqli_num_rows($res)>0){
        foreach($res as $row){
            if($email == $row['email']){
              
                $bool = true;

            };
            if($id_code == $row['id_code']){
             $id_code_chk = true;
            };
        }
    };

    if($bool === false){
        if($id_code_chk === false){
        if($passwrd === $confPass){

            //set id_code to personal
          $setter = "insert into personal(id_code,typ_agriculteur) values(?,?)";
          $setting = $conn->prepare($setter);
          $setting->bind_param("ss",$id_code,$typ_agri);
          $setting->execute();

          //create account
        $sql = 'insert into accounts(email,password,id_code) values(?,?,?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss",$email ,$passwrd,$id_code);
        $stmt->execute();

       $req = "select * from accounts where email = '$email'";
        $resu = mysqli_query($conn,$req);
        if(mysqli_num_rows($resu)>0){
            foreach($resu as $found){
                $user = $found['id_code'];
                $_SESSION['user']=$user;
                $setlang = mysqli_query($conn,"insert into setlang(mode,id_code) values('off','$user')");
            }
           
        };



        header("location:profil.php?id=$user");
        $stmt->close();
        $conn->close();
        }else{
            include 'index.php';

           // echo "<script>alert('Password aren t the same')</script>";
           ?>

           <div class="anime1">
           <div class="img">
               <h1>!</h1>
           </div>
           <div class="text">
             <p>Ibiharuro kabanga bitegerezwa kuba bisa!</p>
             <p>mot de passe doit etre le meme</p>
           </div>
           <div class="btn">
       <a href="index.php">OK</a>
           </div>
       </div>
       
       <?php
        };
    }else{
        echo "Timeout§§!!!!!!!!!!!!!!!error";
    };
    }else{
        include 'index.php';
       // echo "<script>alert('$email exist')</script>";
       ?>

       <div class="anime1">
       <div class="img">
           <h1>!</h1>
       </div>
       <div class="text">
         <p><?=$email?> Yarakoeshejwe!</p>
         <p><?=$email?> exist!</p>
       </div>
       <div class="btn">
   <a href="index.php">OK</a>
       </div>
   </div>
   <?php
    };
   
   
   // $db = mysqli_query($conn,$req);

    
};
/*if(isset($_POST['register'])){
    $connex = new mysqli('localhost' ,'root' ,'');
    $req = "CREATE database $email";
    $db = $connex->prepare($req);
$db->execute();
$connex->close();
};*/

?>
</body>
</html>