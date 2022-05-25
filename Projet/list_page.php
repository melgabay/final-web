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

    $query 	= "SELECT * FROM tbl_trips_206";

	$result = mysqli_query($connection, $query);

    if(!$result) {

        die("DB query failed.");

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/list_page.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer="" src="js/list_page.js"></script>
    <script defer="" src="js/script.js"></script>
    <title>TripDream</title>
</head>

<body>
    <header>
        <a href="index.html"></a>
        <section class="prof-pic">
            <a href="#" class="user_pic"></a>
            <span>Hello Dana</span>
        </section>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.html">Homepage</a></li>
                    <li class="nav-item"><a class="nav-link" href="form.html">Create New Trip</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">My Trips</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="h1_template">
        <h1>My Trips</h1>
    </div>
    <main>
        <h2 class="object_page_h2">Path:</h2>
        <div class="trip_destnations">
            <?php 
            while($row = mysqli_fetch_assoc($result)) 
            {//results are in associative array. keys are cols names

                echo '<div class="destnation">';
                echo   '<h3>' .$row["t_name"]. '</h3>';
                echo  '<p>Created on the '. $row["create_date"].'</p>';
                echo '<div class="crayon">';
                echo   '<p> <b>'. $row["start_date"] . ' - '  .$row["end_date"].  '</b> </p>';
                echo   '<a href="#"></a>';
                echo '</div>';
                echo     '<div class="poubelle">';
                echo        '<div></div>';
                echo    '<div class="div-red">';
                echo       'Total:' .$row["budget"] . '$';
                echo    '</div>';
                echo     '<img src="images/poubelle.png" class="delete_button" alt="poubelle" title="poubelle">';
                echo                '</div>';
                echo          '</div>';
                }
            ?> 
            <?php 
            //release returned data
            mysqli_free_result($result);
            ?>
        </div>
    </main>
</body>

</html>
<?php

//close DB connection

mysqli_close($connection);

?>