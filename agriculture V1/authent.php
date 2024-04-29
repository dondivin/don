<?php
session_start();
include('conn.php');
 
if(isset($_POST['verify'])){
    $log = $_POST['log'];

    $sql = "select * from accounts where email = '$log'";
   // $res = $conn->prepare($sql);
    $res = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($res)>0){
        foreach($res as $row){
            echo $row['password']; 
            $_SESSION['code'] = $row['id_code'];
            header("location:authName.php?id=$user");
        }
    }else{
       header('location:notFound.php');
       session_destroy();
    }
};

if(isset($_POST['verifyName'])){
    $name = $_POST['name'];
    $user1 = $_SESSION['code'];
    //SELECT * from personal where pname = 'Ntakirutimana' AND id_code = 'XF691DPMAO'
    $sql2 = "select * from personal where pname = '$name' AND id_code = '$user1'";
   // $res = $conn->prepare($sql);
    $res1 = mysqli_query($conn,$sql2);
    
    if(mysqli_num_rows($res1)>0){
        foreach($res1 as $row2){
          //  echo $row2['password']; 
            header("location:authId.php?id=$user");
        }
    }else{
       header('location:notFound.php');
      //echo $user1;
      session_destroy();
    }
};
if(isset($_POST['verifyId'])){
    $id = $_POST['id'];
    $user = $_SESSION['code'];
    $sql = "select * from personal where Num_id = '$id' and id_code = '$user'";
   // $res = $conn->prepare($sql);
    $res = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($res)>0){
        foreach($res as $row){
            $sql1 = "select * from accounts where id_code = '$user'";
             $look = mysqli_query($conn,$sql1);
             if(mysqli_num_rows($look)>0){
                foreach($look as $row1){
                    session_destroy();
            ?>
           
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/auth.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    <div class="pass">
   <label for="">Akabanga kanyu</label>
<h1><?=$row1['password']?></h1>
    
       <a href="index.php">Ok</a>
    </div>
</body>
</html>
<?php
                }
             }
        }
    }else{
       header('location:notFound.php');
       session_destroy();
    }
};


?>