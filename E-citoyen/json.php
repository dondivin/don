<?php
include "conn.php";

$req = "SELECT * FROM syst_provinces";
$res = mysqli_query($conn,$req);
while($province=$res->fetch_assoc()){
    $provinces[]=$province;
};

$myObj = new stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

//echo $myJSON;

/*while($province=$res->fetch_assoc()){
    $provinces[]=array(
        'PROVINCE_ID' => $province['PROVINCE_ID'],
        'PROVINCE_NAME' => $province['PROVINCE_NAME'],
    );
}*/

$jsonFile = json_encode($provinces, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $jsonFile;
file_put_contents("province.json", $jsonFile);
$req1 = "SELECT * FROM syst_communes";
$res1 = mysqli_query($conn,$req1);


while($commune=$res1->fetch_assoc()){
    $communes[]=$commune;
}

$jsonFile1 = json_encode($communes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
//echo $jsonFile1;
//file_put_contents("commune.json", $jsonFile1);



?>