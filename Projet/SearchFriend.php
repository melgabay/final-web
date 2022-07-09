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
    $begin=0;
    $end=0;
    $ages=0;
    $character =0;
	$prodId = $_GET["prodId"];
    if(isset( $_GET["begin"]))
    {
    $begin = $_GET["begin"]; 
    }
    if(isset( $_GET["end"]))
    {
    $end = $_GET["end"];
    }
    if(isset( $_GET["ages"]))
    {
    $ages = $_GET["ages"];
    }
    if(isset($_GET["character"]))
    {
    $character = $_GET["character"];
    }


	$query 	= "UPDATE tbl_trips_206 t
    SET      t.start_date = COALESCE(NULLIF($begin, 0), t.start_date),
             t.end_date =  COALESCE(NULLIF($end, 0), t.end_date),
             t.ages =  COALESCE(NULLIF($ages, 0), t.ages),
             t.nature =  COALESCE(NULLIF($character, 0), t.nature)
    WHERE t.t_id=" . $prodId;
    echo $query;
	// echo $query;
	$result = mysqli_query($connection, $query);

	if($result==true) {
        echo '1';
	}

	else die("DB query failed.");



?>

