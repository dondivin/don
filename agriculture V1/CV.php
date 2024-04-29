<?php
session_start();
$id_user = $_SESSION['user'];
include 'conn.php';
$booler = 'none';
if(isset($_SESSION['user'])){

$check = mysqli_query($conn,"SELECT * from personal where id_code = '$id_user'");
$bool = false;
  if(mysqli_num_rows($check)>0){
    foreach($check as $checked){
        if($checked['status']==='AdminGrantor' || $checked['status']==='Administrateur'){
           // $id_per = $_GET['id_per'];
           $booler = $_GET['bool'];
           $bool = true;
        };
        if($bool === true && $booler != 'pro'){
            $id_per = $_GET['id_per'];
$sql = "select * from personal where id = '$id_per'";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
    foreach($res as $row){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/identite.css">
    <link rel="stylesheet" href="css/loading.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: rgb(4, 25, 44);
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
       
    </style>
    <title>Identification</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    <div class="bigSite">
    <div class="cv">
        <div class="profil">
       <div class="img">
        <img src="profil/<?=$row['profil']?>" alt="">
       </div>
       <div class="info">
        <div class="head">
            <p>Contact Info</p>
        </div>
        <div class="phone">
            <div class="pho">
                <div>
                    <img src="icon/phone.svg" alt="">
                </div>
                
                <p>Phone :</p>
            </div>
            <p><?=$row['phone']?></p>
           
        </div>
        <div class="email">
            <div class="emai">
                <div>
                    <img src="icon/Email.svg" alt="">
                </div>
               
                <p>Email :</p>
            </div>
           <p><?=$row['email']?></p>
        </div>
        <div class="address">
            <div class="addre">
                <div>
                    <img src="icon/address.svg" alt="">
                </div>
                
                 <p>Address :</p>
            </div>
          <p><?=$row['address']?></p>
        </div>
       </div>
       <div class="person">
        <div class="tag">
            <p>Person Info</p>
        </div>
       
        <div class="name">
            <h1><?=$row['pname']?> <?=$row['psurname']?></h1>
        </div>
        <div class="info1">
            <div class="id">
                <div>
                    <div>
                        <img src="icon/id.svg" alt="">
                    </div>
                   
                    <div><p>ID </p></div>
                </div>
               <div>:</div>
               <div>
                <p><?=$row['Num_id']?></p>
               </div>      
            </div>
            <div class="gender">
                <div>
                    <div>
                        <img src="icon/gender.svg" alt="">
                    </div>
                    
                <div>
                    <p>Genre </p>
                </div>
                </div>
                <div>:</div>
                <div>
                    <p><?=$row['genre']?></p>
                </div>
            </div>
            <div class="nation">
                <div>
                    <div>
                        <img src="icon/world.svg" alt="">
                    </div>
                 <div>
                    <p>Pays</p>
                 </div>
                  
                </div>
                <div>:</div>
               <div>
                <p><?=$row['country']?></p>
               </div>
            </div>
        </div>
       </div>
        </div>
        <div class="content">
           <div class="nom">
            <h1><?=$row['pname']?> <?=$row['psurname']?></h1>
           </div>
           <div class="travail">
            <div>
                <div>
                    <img src="icon/profession.svg" alt="">
                </div>
                <div>
                    <h1>Status</h1>
                </div>
               
            </div>
           
           <div>
            <div>
                <h1>:</h1>
            </div>
           </div>
           <div>
            <div>
                <h1><?=$row['typ_agriculteur']?></h1>
            </div>
           
           </div>
           </div>
        </div>
    </div>


    </div>




    <div class="load">
        <div class="img">
            <div>
                <img src="icon/agrilogo.png" alt="">
            </div>
        </div>
        <div class="loading">
        <div>
            <div></div>
        </div>
        <p>loading...</p>
        </div>
    </div>



</body>
<script src="js/load.js"></script>
</html>


<?php
    }
    ?>
    <?php
    }
    ?>

<?php
       }else{

        $sql = "select * from personal where id_code = '$id_user'";
        $res = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($res)>0){
            foreach($res as $row){
 
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/identite.css">
    <link rel="stylesheet" href="css/loading.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: rgb(4, 25, 44);
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
       
    </style>
    <title>Identification</title>
</head>
<body>
    <div class="bigSite">
    <div class="cv">
        <div class="profil">
       <div class="img">
        <img src="profil/<?=$row['profil']?>" alt="">
       </div>
       <div class="info">
        <div class="head">
            <p>Contact Info</p>
        </div>
        <div class="phone">
            <div class="pho">
                <div>
                    <img src="icon/phone.svg" alt="">
                </div>
                
                <p>Phone :</p>
            </div>
            <p><?=$row['phone']?></p>
           
        </div>
        <div class="email">
            <div class="emai">
                <div>
                    <img src="icon/Email.svg" alt="">
                </div>
               
                <p>Email :</p>
            </div>
           <p><?=$row['email']?></p>
        </div>
        <div class="address">
            <div class="addre">
                <div>
                    <img src="icon/address.svg" alt="">
                </div>
                
                 <p>Address :</p>
            </div>
          <p><?=$row['address']?></p>
        </div>
       </div>
       <div class="person">
        <div class="tag">
            <p>Person Info</p>
        </div>
       
        <div class="name">
            <h1><?=$row['pname']?> <?=$row['psurname']?></h1>
        </div>
        <div class="info1">
            <div class="id">
                <div>
                    <div>
                        <img src="icon/id.svg" alt="">
                    </div>
                   
                    <div><p>ID </p></div>
                </div>
               <div>:</div>
               <div>
                <p><?=$row['Num_id']?></p>
               </div>      
            </div>
            <div class="gender">
                <div>
                    <div>
                        <img src="icon/gender.svg" alt="">
                    </div>
                    
                <div>
                    <p>Genre </p>
                </div>
                </div>
                <div>:</div>
                <div>
                    <p><?=$row['genre']?></p>
                </div>
            </div>
            <div class="nation">
                <div>
                    <div>
                        <img src="icon/world.svg" alt="">
                    </div>
                 <div>
                    <p>Pays</p>
                 </div>
                  
                </div>
                <div>:</div>
               <div>
                <p><?=$row['country']?></p>
               </div>
            </div>
        </div>
       </div>
        </div>
        <div class="content">
           <div class="nom">
            <h1><?=$row['pname']?> <?=$row['psurname']?></h1>
           </div>
           <div class="travail">
            <div>
                <div>
                    <img src="icon/profession.svg" alt="">
                </div>
                <div>
                    <h1>Status</h1>
                </div>
               
            </div>
           
           <div>
            <div>
                <h1>:</h1>
            </div>
           </div>
           <div>
            <div>
                <h1><?=$row['typ_agriculteur']?></h1>
            </div>
           
           </div>
           </div>
        </div>
    </div>


    </div>




    <div class="load">
        <div class="img">
            <div>
                <img src="icon/agrilogo.png" alt="">
            </div>
        </div>
        <div class="loading">
        <div>
            <div></div>
        </div>
        <p>loading...</p>
        </div>
    </div>



</body>
<script src="js/load.js"></script>
</html>
<?php
   }
}
?>

<?php
        }
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