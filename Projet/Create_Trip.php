<?php 

    //create a mySQL DB connection:

	include "config.php";


    //testing connection success

    include "logincheak.php"; 

?>

<?php 
    $userdId = $_SESSION["user_id"];
	$dateStart= $_GET["dateStart"];

    $dateEnd= $_GET["dateEnd"];

	$Name= $_GET["Name"];

	$age= $_GET["age"];

	$type= $_GET["type"];


	$amount= $_GET["amount"];


     

    $query 	= "insert into tbl_trips_206 

    (t_name	,start_date	,end_date, ages	,nature,budget	)
    VALUES  (".$Name.",".$dateStart.",". $dateEnd.",".$age.",".$type.",".$amount.")";


    echo  $query ;

    $result = mysqli_query($connection, $query);

    $queryNewline="select * from tbl_trips_206 u order by u.create_tim desc limit 1";
	$resultNewLine = mysqli_query($connection, $queryNewline);
    $rowUser    = mysqli_fetch_assoc($resultNewLine);



    $query 	= "insert into tbl_user_trips_206 value(".$userdId.",".$rowUser["t_id"].")" ;

    $result = mysqli_query($connection, $query);


    if($result==true) {
        
        echo 'Trip created';
    }

	else 
    {
        echo 'Trip create failed';
    }

?>

