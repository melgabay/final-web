<?php 

    //create a mySQL DB connection:

	include "config.php";


    //testing connection success

    include "logincheak.php"; 


?>

<?php 

	//get data from DB
    $fullName=0;
    $interest=0;
    $city=0;
    $country =0;
    $mail=0;
    $pass=0;
    $phone=0;
    $age=0;
    $Character=0;
    $destId=0;
    $dateMonth=0;
    $dateYear=0;
	$userId = $_SESSION["user_id"];

    $query 	= "UPDATE tbl_users_206 u
    SET ";

    if(isset( $_POST["fullName"]))
    {
    $fullName = $_POST["fullName"]; 
    $query=$query. "u.name = \"".$fullName."\" ";
    }

    if(isset( $_POST["interest"]))
    {
    $interest = $_POST["interest"];
    $query=$query. ",u.Interest = \"".$interest."\" ";

    }
    if(isset( $_POST["city"]))
    {
    $city = $_POST["city"];
    $query=$query. ",u.city = \"".$city."\" ";

    }
    if(isset($_POST["country"]))
    {
    $country = $_POST["country"];
    $query=$query. ",u.country = \"".$country."\" ";
    }
    if(isset($_POST["mail"]))
    {
    $mail = $_POST["mail"];
    $query=$query. ",u.email = \"".$mail."\" ";
    }
    if(isset($_POST["pass"]))
    {
    $pass = $_POST["pass"];
    $query=$query. ",u.password = \"".$pass."\" ";

    }
    if(isset($_POST["phone"]))
    {
    $phone = $_POST["phone"];
    $query=$query. ",u.phone = \"".$phone."\" ";

    }

    if(isset($_POST["age"]))
    {
    $age = $_POST["age"];
    $query=$query. ",u.age = \"".$age."\" ";

    }
    if(isset($_POST["Character"]))
    {
    $Character = $_POST["Character"];
    $query=$query. ",u.favorite_charactere = \"".$Character."\" ";

    }
    if(isset($_POST["destId"]))
    {
    $destId = $_POST["destId"];
    $query=$query. ",u.wants_travel_to = \"".$destId."\" ";

    }
   
    if(isset($_POST["date"]))
    {
    $dateMonth =substr($_POST["date"],0,2);
    $dateYear =substr($_POST["date"],3);
    $query=$query. ",u.dates_month = \"".$dateMonth."\" ";
    $query=$query. ",u.dates_year = \"".$dateYear."\" ";



    }
    														
    $query=$query."WHERE u.u_id=" . $userId; 

	echo $query;
	$result = mysqli_query($connection, $query);

	if($result==true) {
        header('Location:profile_page.php?id='.$userId.'&update=1');
	}

	else 
    {
        header('Location:profile_pagr.php??id='.$userId.'&update=0');
    }



?>

