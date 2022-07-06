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

	$prodId = $_GET["prodId"];

	$query 	= "DELETE  FROM tbl_trips_206  WHERE tbl_trips_206.t_id=" . $prodId;

	$result = mysqli_query($connection, $query);


	if($result==true) {
        echo '1';
	}

	else die("DB query failed.");

?>

