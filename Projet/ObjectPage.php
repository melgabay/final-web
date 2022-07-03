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

	$prodId = $_GET["prodId"];

	$query 	= "SELECT * from tbl_trips_206 as t
    inner join tbl_destinations_trip_206 as t_d
    on t.t_id= t_d.t_id
    inner join tbl_destination_206 as d
    on d.d_id= t_d.d_id where t.t_id=" . $prodId;
	// echo $query;

	$result = mysqli_query($connection, $query);

	if($result) {

		$row 	= mysqli_fetch_assoc($result);

	}

	else die("DB query failed.");

?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
    <!-- BOOTSRAP -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/object_page.css">
    <link rel="stylesheet" href="css/template.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <title>TripDream</title>
</head>


<body>


<header class="d-flex justify-content-between">
     <input type="checkbox" id="hamburger-input" class="burger-shower" />
        <label id="hamburger-menu" for="hamburger-input">
        <nav id="sidebar-menu">
            <h3>Menu</h3>
            <ul>
            <li class="nav-item"><a class="nav-link " aria-current="page" href="homepage.php">Homepage</a></li>
            <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
            <li class="nav-item"><a class="nav-link active" href="list_page.php">My Trips</a></li>
            <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
            </ul>
        </nav>
        </label>

        <div class="overlay"></div>
        <a href="index.html"><img src="./images/logo.png" alt="logo"></a>

         <nav id="main-menu">
            <ul class="d-flex justify-content-around align-items-center">
                <li class="nav-item"><a class="nav-link " aria-current="page" href="homepage.php">Homepage</a></li>
                <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                <li class="nav-item"><a class="nav-link active" href="list_page.php">My Trips</a></li>
                <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
            </ul>
        </nav>

        

        <section class="prof-pic">
            <a href="#" class="user_pic"></a>
            <span>Hello Dana</span>
        </section>
    </header>

    <main class="main-form">
    <div id="trip_details">
            <section class="trip_details_section">
                <span>Dates:</span>
                <input type="date" name="begin" placeholder="dd-mm-yyyy"  min="1997-01-01"
                    max="2030-12-31" value="<?php echo $row["start_date"];?>" disabled >
                <input type="date" name="end" placeholder="dd-mm-yyyy" value="<?php echo $row["end_date"];?>"" min="1997-01-01"
                    max="2030-12-31" disabled>
            </section>
            <section class="trip_details_section">
                <span>Ages:</span>
                <!-- <button class="edit_button"></button>  -->
                <select name="Ages" disabled data-selected="<?php echo $row["ages"];?>">
                    <option value="1">18-25</option>
                    <option value="2">26-35</option>
                    <option value="3">36-45</option>
                    <option value="4">46-60</option>
                    <option value="5">60+</option>
                </select>
            </section>
            <section class="trip_details_section">
                <span>Character</span>
                <!-- <button class="edit_button"></button>  -->
                <select name="Character" disabled  data-selected="<?php echo $row["nature"];?>">
                    <option value="1">Chill</option>
                    <option value="2">Sunbathing</option>
                    <option value="3">Tracks</option>
                    <option value="4">Nature</option>
                    <option value="5">Field</option>
                    <option value="6">Shopping</option>
                </select>
            </section>
            <section class="trip_details_section">
                <span>Total</span>
                <span><?php echo $row["budget"];?> &nbsp;&#8362;</span>
            </section>
    </div>
        <h2 id="object_page_h2">Path:</h2>
        <div id="trip_destnations">
            <?php 
        $numberDest=0;
        while($row) 
                {
                $numberDest++;
                echo '<div class="destnation">';
                echo         '<div class="des_img">';
                echo             '<img src="images/Vector 3.png">';
                echo             '<img src="images/dest'.$numberDest.'.png">';
                echo              '<img src="images/dots.png">';
                echo             '<img src="images/bus.png">';
                echo          '</div>';
                echo          '<div class="area_list">';
                echo            '<h3>'. $row["destination_name"] .'</h3>';
                echo             '<img src="images/Vector 4.png">';
                echo             '<span>Areas:</span>';
                echo             '<ol>';
                $queryArea 	= "SELECT a.area_name from tbl_destination_206 as d
                inner join tbl_destination_area_206  as d_a
                on d.d_id=d_a.d_id
                inner join tbl_area_206 as a
                on d_a.a_id= a.a_id where d.d_id=" . $row["d_id"]."";
                $resultArea = mysqli_query($connection, $queryArea);
                if($resultArea) {

                    $rowArea= mysqli_fetch_assoc($resultArea);
            
                }
                else die("DB query failed.");
                while($rowArea) 
                {
                echo                 '<li>';
                echo                     '<div class="form-check">';
                echo    '<input class="form-check-input" type="checkbox" name="dest1_ares[]" value="' . $row["d_id"].'" checked>';
                echo    '<label class="form-check-label"> '.  $rowArea["area_name"].'</label>';
                echo                     '</div>';
                echo                 '</li>';
                $rowArea= mysqli_fetch_assoc($resultArea);
                 }
                echo             '</ol>';
                echo             '<section>';
                echo                '<p>Total:7000 &nbsp;&#8362;</p>';
                echo            '</section>';
                echo         '</div>';
                echo     '</div>';
                $row= mysqli_fetch_assoc($result);
                }
        ?> 
        
        </div>

        <div class="change-button">
            <button type="button" class="btn btn-secondary">Delete</button>
            <div class="edit" id="edit_button"> <button type="button" class="btn btn-secondary">Edit</button></div>
        </div>

    </main>
</body>

</html>
<?php

//close DB connection

mysqli_close($connection);

?>