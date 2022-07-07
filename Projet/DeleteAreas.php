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

	$Id = $_GET["Id"];
    $array= $_GET["array"];
    $ids = implode("','", $array);

	$query 	= "DELETE  FROM tbl_destination_area_206  WHERE tbl_destination_area_206.d_id=" . $Id ." AND tbl_destination_area_206.a_id IN(".$ids.")";
    echo $query;


	$result = mysqli_query($connection, $query);


	if($result==true) {
        echo '1';
	}

	else die("DB query failed.");

?>

