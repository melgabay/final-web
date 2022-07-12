<?php

//create a mySQL DB connection:

include "config.php";


//testing connection success

include "logincheak.php";


?>

<?php 

	//get data from DB
    $dateYear=0;
    $dateMonth=0;
    $destId=0;
    $char=0;
    $tripId=0;
    $queryAge="(SELECT * from tbl_users_206) as a";
    $queryDate="(SELECT * from tbl_users_206) as d";
    $queryDest="(SELECT * from tbl_users_206) as de";
    $queryChar="(SELECT * from tbl_users_206) as ch";
    $queryTrip="(SELECT * from tbl_users_206) as t";

    if(isset( $_GET["dateYear"]))
    {
    $dateYear = $_GET["dateYear"]; 
    }

    if(isset( $_GET["dateMonth"]))
    {
    $dateMonth = $_GET["dateMonth"]; 
    $queryDate 	= "(SELECT * from tbl_users_206 d
    WHERE    d.dates_year = $dateYear
    AND       d.dates_month =$dateMonth) as d";
    }

    if(isset( $_GET["dest"]))
    {
    $destId = $_GET["dest"]; 
    $queryDest="(SELECT * from tbl_users_206 de where de.wants_travel_to = $destId) as de";
    }
    if(isset( $_GET["char"]))
    {
    $char = $_GET["char"]; 
    $queryChar="(SELECT * from tbl_users_206 ch where ch.favorite_charactere = $char) as ch";
    }

    if(isset( $_GET["tripId"]))
    {
    $tripId = $_GET["tripId"]; 
    $queryChar=" (SELECT * FROM tbl_user_trips_206 tr where tr.t_id=$tripId) as t";
    }

    if(isset( $_GET["ages"]))
    {
    $ages = $_GET["ages"]; 
    switch ($ages) {
        case 1:
            $queryAge= "(SELECT * from tbl_users_206 a WHERE a.age > 18 AND a.age <25) as a";
            break;
        case 2:
            $queryAge= "(SELECT * from tbl_users_206 a WHERE a.age > 26 AND a.age <35) as a";
            break;
        case 3:
            $queryAge= "(SELECT * from tbl_users_206 a WHERE a.age > 36 AND a.age <45) as a";
            break;
        case 4:
            $queryAge= "(SELECT * from tbl_users_206 a WHERE a.age > 36 AND a.age <45) as a";
            break;
        case 5:
            $queryAge= "(SELECT * from tbl_users_206 a WHERE a.age > 60) as a";
        break;
        }


    }

    $query= "select * from ".$queryDate ." 
    inner join ".$queryAge ." on a.u_id=d.u_id 
    inner join ". $queryDest. " on d.u_id=de.u_id 
    inner join ".$queryChar . " on ch.u_id=de.u_id 
    inner join ".$queryTrip . " on t.u_id=d.u_id";


	$result = mysqli_query($connection, $query);

?>

    <?php
    if (mysqli_num_rows($result) != 0) 
        {
        while ($row = mysqli_fetch_assoc($result))
            {
        echo '<div class="card offp" style="margin-bottom: 10%;">';
        echo             '<img src="'.$row["picture"].'" class="card-img-top" alt="man picture">';
        echo               '<div class="card-body">';
        echo                 '<h3 class="card-title">'.$row["name"].'</h3>';
        echo                   '<p class="card-text"><b>From:</b>'.$row["city"].','. $row["country"].'</p>';
        echo                    '<p class="card-text"><b>Age:</b>'. $row["age"].'</p>';

        $queryDest     = "SELECT * from tbl_destination_206  where d_id=".$row["wants_travel_to"];
        $resultDest = mysqli_query($connection, $queryDest);
        $rowDest = mysqli_fetch_assoc($resultDest);

        echo                   '<p class="card-text"><b>Wants to travel to:</b>'.$rowDest["destination_name"].' in '.$row["dates_month"].'/'.$row["dates_year"].'</p>';
        echo  '<p class="card-text"><b>Interest:</b>'.$row["Interest"].'</p>';
        echo                   '<a href="#" class="btn btn-primary new-color">Add Friend</a>';
        echo               '</div>';
        echo           '</div>';
            }
    }else 
    {
        echo 'No Friend found ,try another paramters';
    }

    ?>




