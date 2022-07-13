<?php 

    //create a mySQL DB connection:

	include "config.php";


    //testing connection success

    include "logincheak.php"; 


?>

<?php 

	//get data from DB
    

    $fullName = $_POST["fullName"]; 
    $fullName= "\"".$fullName."\" ";
    $interest = $_POST["interest"];
    $interest= "\"".$interest."\" ";
    $city = $_POST["city"];
    $city= "\"".$city."\" ";
    $country = $_POST["country"];
    $country= "\"".$country."\" ";
    $mail = $_POST["mail"];
    $mail= "\"".$mail."\" ";
    $pass = $_POST["pass"];
    $pass= "\"".$pass."\" ";
    $phone = $_POST["phone"];
    $phone= "\"".$phone."\" ";
    $age = $_POST["age"];
    $Character = $_POST["Character"];
    $destId = $_POST["destId"];
    $dateMonth =substr($_POST["date"],0,2);
    $dateYear =substr($_POST["date"],3);


    $query 	= "insert into tbl_users_206 
    (name	,email	,city	,country	,phone	,wants_travel_to	,dates_month	,dates_year	,password	,Interest	,age	,favorite_charactere)
    VALUES  (".$fullName.",".$mail.",". $city.",".$country.",".$phone.",".$destId.",".$dateMonth.",".$dateYear.",".$pass.",".$interest.",".$age.",".$Character.")";
    


	$queryNewline="select * from tbl_users_206 u order by u.register_date desc limit 1";
	$result = mysqli_query($connection, $queryNewline);

	if($result==true) {
        $rowUser    = mysqli_fetch_assoc($result);
        header('Location:profile_page.php?id='.$rowUser["u_id"].'&create=1');
	}

	else 
    {
        header('Location:profile_pagr.php?create=0');
    }



?>

