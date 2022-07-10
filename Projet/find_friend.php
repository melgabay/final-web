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

 <!-- fav icone -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>TripDream</title>
</head>


<body>
<header class="d-flex justify-content-between pl-3 pr-3 align-items-center bl">
    <a href="index.php">
        <img src="./images/logo.png" alt="logo" class="logo">
    </a>

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <a class="nav-link " aria-current="page" href="homepage.php">Homepage</a>
            <a class="nav-link  " href="form.php">Create New Trip</a>
            <a class="nav-link  " href="list_page.php">My Trips</a>
            <a class="nav-link  active" href="find_friend.php">Find Friend</a>
        </div>
        <nav class="navbar navbar-dark ml-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars"></i>
            </button>
        </nav>
    </div>

    <nav>
        <ul class="d-flex justify-content-between nav">
            <li class="nav-item"><a class="nav-link " aria-current="page" href="homepage.php">Homepage</a>
            </li>
            <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
            <li class="nav-item"><a class="nav-link  " href="list_page.php">My Trips</a></li>
            <li class="nav-item"><a class="nav-link  active" href="find_friend.php">Find Friend</a></li>
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

    <section class="mt-1">
        <a href="#" class="d-flex justify-content-center">
            <?php  echo '<img src="'.$rowUser["picture"].'" class="photo_profil" alt=".$rowUser["picture"]" />'?>
        </a>
        <span>Hello
            <?php echo   $rowUser["name"]; ?>
        </span>
    </section>
</header>

    <main class="ffmain">
        <form action="#" method="GET" class="rec-white find-friend-page ">
            <h3> How would you like to search for Friend</h3>

            <div class="d-flex d1">
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Search by trip</label>
                    <select id="inputState" class="form-select" required>
                        <option value="">...</option>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) 
                         { 
                        echo '<option value="'.$row["t_id"].'">'.$row["t_name"].'</option>';
                         }
                        ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inputState" class="form-label">Search by Destination</label>
                    <select id="inputState" class="form-select" required>
                        <option value="">...</option>
                        <option value="South America">South America</option>
                        <option value="North America">North America</option>
                        <option value="Europe">Europe</option>
                        <option value="Asia">Asia</option>
                        <option value="Australia">Australia</option>
                        <option value="Africa">Africa</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="control-label" for="date">Search by date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                </div>
            </div>


            <div class="d-flex d1">
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Search by trip Charactere</label>
                    <select id="inputState" class="form-select" required>
                        <option value="">...</option>
                        <option value="1">Chill</option>
                        <option value="2">Sunbathing</option>
                        <option value="3">Tracks</option>
                        <option value="4">Nature</option>
                        <option value="5">Field</option>
                        <option value="6">Shopping</option>
                    </select>
                </div>

                <div class="col-md-3">
                <label for="inputState" class="form-label">Search by Age</label>
                    <select id="inputState" class="form-select" required>
                        <option value="">...</option>
                        <option value="1">18-25</option>
                        <option value="2">26-35</option>
                        <option value="3">36-45</option>
                        <option value="4">46-60</option>
                        <option value="5">60+</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label> Search by Budget</label>
                    <input type="number" class="form-control" id="inputPassword2" placeholder="0 $">
                </div>


            </div>

            </div>

            <button type="button" class="btn btn-primary new-color bouton-vert">Search</button>

        </form>

        <h2> Friend List:</h2>

        <div class="ffp">
            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/asaf levi.jpg" class="card-img-top" alt="man picture">
                <div class="card-body">
                    <h3 class="card-title">Asaf Levi</h3>
                    <p class="card-text"><b>From:</b> Tel Aviv, Israel</p>
                    <p class="card-text"><b>Age:</b> 27</p>
                    <p class="card-text"><b>Wants to travel to:</b> South America from May-August</p>
                    <p class="card-text"><b>Interest:</b> Hiking, Nature, History, Explore cultures.</p>
                    <a href="#" class="btn btn-primary new-color">Add Friend</a>
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
                    <a href="#" class="btn btn-primary new-color">Add Friend</a>
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
                    <a href="#" class="btn btn-primary new-color">Add Friend</a>
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
                    <a href="#" class="btn btn-primary new-color">Add Friend</a>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary new-color ffp">Explore More Friend</button>
    </main>
</body>

</html>


<?php

//close DB connection

mysqli_close($connection);

?>