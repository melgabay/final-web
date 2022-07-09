<?php 

    //create a mySQL DB connection:

	include "config.php";


    //testing connection success

    include "logincheak.php"; 


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="favicon.ico">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">

    <!-- boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- bootsrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>



    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/template.css">
    <!-- <link rel="stylesheet" href="css/form.css"> -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>-->
    <script defer="" src="js/list_page.js"></script>
    <script defer="" src="js/script.js"></script>


    <!-- calendar -->
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <!-- calendar -->

    <title>TripDream</title>
</head>


<body>

    <header class="d-flex justify-content-between">
        <input type="checkbox" id="hamburger-input" class="burger-shower" />
        <label id="hamburger-menu" for="hamburger-input">
            <nav id="sidebar-menu">
                <h3>Menu</h3>
                <ul>
                    <li class="nav-item"><a class="nav-link " aria-current="page" href="homepage.php">Homepage</a>
                    </li>
                    <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                    <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                    <li class="nav-item"><a class="nav-link active " href="find_friend.php">Find Friend</a></li>
                </ul>
            </nav>
        </label>

        <div class="overlay"></div>
        <a href="index.php"><img src="./images/logo.png" alt="logo"></a>

        <nav id="main-menu">
            <ul class="d-flex justify-content-around align-items-center">
                <li class="nav-item"><a class="nav-link " aria-current="page" href="homepage.php">Homepage</a>
                </li>
                <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                <li class="nav-item"><a class="nav-link active " href="find_friend.php">Find Friend</a></li>
            </ul>
        </nav>



        
        <?php 

//get data from DB

$userdId = $_SESSION["user_id"];


$userCheak 	= "SELECT * from tbl_users_206 where u_id =".$userdId;

$resultUser = mysqli_query($connection, $userCheak);

if($resultUser) {
    $rowUser	= mysqli_fetch_assoc($resultUser);
}

else die("DB query failed.");

?>

<section class="prof-pic">
    <a href="#" class="user_pic" style="background-image: url('<?php echo   $rowUser["picture"]; ?>.png');" ></a>
    <span>Hello <?php echo   $rowUser["name"]; ?></span>
</section>
</section>
    </header>
    <main class="ffmain">
        <h2> We found for you friend:</h2>

        <div class="ffp">
            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/asaf levi.jpg" class="card-img-top" alt="man picture">
                <div class="card-body">
                    <h3 class="card-title">Asaf Levi</h3>
                    <p class="card-text"><b>From:</b> Tel Aviv, Israel</p>
                    <p class="card-text"><b>Age:</b> 27</p>
                    <p class="card-text"><b>Wants to travel to:</b> South America from May-August</p>
                    <p class="card-text"><b>Interest:</b> Hiking, Nature, History, Explore cultures.</p>
                    <a href="#" class="btn btn-primary new-color">Talk to me</a>
                </div>
            </div>

            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/asaf levi.jpg" class="card-img-top" alt="man picture">
                <div class="card-body">
                    <h3 class="card-title">Asaf Levi</h3>
                    <p class="card-text"><b>From:</b> Tel Aviv, Israel</p>
                    <p class="card-text"><b>Age:</b> 27</p>
                    <p class="card-text"><b>Wants to travel to:</b> South America from May-August</p>
                    <p class="card-text"><b>Interest:</b> Hiking, Nature, History, Explore cultures.</p>
                    <a href="#" class="btn btn-primary new-color">Talk to me</a>
                </div>
            </div>

            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/asaf levi.jpg" class="card-img-top" alt="man picture">
                <div class="card-body">
                    <h3 class="card-title">Asaf Levi</h3>
                    <p class="card-text"><b>From:</b> Tel Aviv, Israel</p>
                    <p class="card-text"><b>Age:</b> 27</p>
                    <p class="card-text"><b>Wants to travel to:</b> South America from May-August</p>
                    <p class="card-text"><b>Interest:</b> Hiking, Nature, History, Explore cultures.</p>
                    <a href="#" class="btn btn-primary new-color">Talk to me</a>
                </div>
            </div>

            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/asaf levi.jpg" class="card-img-top" alt="man picture">
                <div class="card-body">
                    <h3 class="card-title">Asaf Levi</h3>
                    <p class="card-text"><b>From:</b> Tel Aviv, Israel</p>
                    <p class="card-text"><b>Age:</b> 27</p>
                    <p class="card-text"><b>Wants to travel to:</b> South America from May-August</p>
                    <p class="card-text"><b>Interest:</b> Hiking, Nature, History, Explore cultures.</p>
                    <a href="#" class="btn btn-primary new-color">Talk to me</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>