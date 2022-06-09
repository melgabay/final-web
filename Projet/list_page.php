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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/list_page.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script defer="" src="js/list_page.js"></script>
    <script defer="" src="js/script.js"></script>

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
   

    <main>
        <div class="trip_destnations">
        <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Depart Date</th>
                            <th scope="col">Return Date</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $rowCount=1;
            while($row = mysqli_fetch_assoc($result)) 
            { 
                echo '<tr class="clickable-row" data-href="ObjectPage.php?prodId=' . $row["t_id"] .'">';
                echo    '<th scope="row">'.$rowCount.'</th>';
                echo    '<td>'.$row["t_name"].'</td>';
                echo    '<td>'.$row["start_date"].'</td>';
                echo    '<td>'.$row["end_date"].'</td>';
                echo     '<td>'.$row["budget"].'$</td>';
                $rowCount++;
             } ?> 
             </tbody>
         </table>
        </div>
        </div>




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