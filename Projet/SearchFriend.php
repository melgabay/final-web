<?php 

    //create a mySQL DB connection:

	include "config.php";



    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    

    //testing connection success

    if(mysqli_connect_errno()) {

        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"

        );

    }

?>

<?php 

	//get data from DB
    $dateYear=0;
    $dateMonth=0;


    if(isset( $_GET["dateYear"]))
    {
    $dateYear = $_GET["dateYear"]; 
    }

    if(isset( $_GET["dateMonth"]))
    {
    $dateMonth = $_GET["dateMonth"]; 
    }


	$query 	= "SELECT * from tbl_users_206 u
    WHERE    u.dates_year = $dateYear
    AND       u.dates_month =$dateMonth";
    echo $query;
	$result = mysqli_query($connection, $query);

	if($result==true) {
        echo $result;
	}

	else die("DB query failed.");



?>

