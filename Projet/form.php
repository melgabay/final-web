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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- bootsrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- multiselect -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>




    <!-- Include Twitter Bootstrap and jQuery: -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Include the plugin's CSS and JS: -->
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css" />



    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <script defer="" src="js/addform.js"></script>



    <!-- calendar -->
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <!-- fav icone -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>TripDream</title>
</head>


<body>
    <header class="d-flex justify-content-between pl-3 pr-3 align-items-center">
        <input type="checkbox" id="hamburger-input" class="burger-shower" />
        <label id="hamburger-menu" for="hamburger-input">
            <nav id="sidebar-menu">
                <h3>Menu</h3>
                <ul>
                    <li class="nav-item"><a class="nav-link  " aria-current="page" href="index.php">Homepage</a>
                    </li>
                    <li class="nav-item"><a class="nav-link active " href="form.php">Create New Trip</a></li>
                    <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                    <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
                    <li class="nav-item"><a class="nav-link  " href="my_friends.php">My Friends</a></li>
                </ul>
            </nav>
        </label>

        <div class="overlay"></div>
        <a href="index.php">
            <img src="./images/logo.png" alt="logo" class="logo">
        </a>

        <nav class="main-menu">
            <ul class="d-flex justify-content-around align-items-center">
                <li class="nav-item"><a class="nav-link " aria-current="page" href="index.php">Homepage</a></li>
                <li class="nav-item"><a class="nav-link active " href="form.php">Create New Trip</a></li>
                <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
                <li class="nav-item"><a class="nav-link  " href="my_friends.php">My Friends</a></li>
            </ul>
        </nav>

        <?php
        //get data from DB
        $userdId = $_SESSION["user_id"];
        $userCheak     = "SELECT * from tbl_users_206 where u_id =" . $userdId;
        $resultUser = mysqli_query($connection, $userCheak);

        if ($resultUser) {
            $rowUser    = mysqli_fetch_assoc($resultUser);
        } else die("DB query failed.");

        ?>

        <section class="mt-1">
            <a href="profile_page.php <?php if ($userdId != 0) {
                                            echo   '?id=' . $userdId;
                                        } ?>  " class=" d-flex justify-content-center">
                <img <?php if ($userdId != 0) {
                            echo ' src="' . $rowUser["picture"] . '"';
                        } else {
                            echo ' src="./images/somone.png"';
                        }
                        ?> class="photo_profil" alt="user picture" />
            </a>
            <span>Hello
                <?php if ($userdId != 0) {
                    echo   $rowUser["name"];
                } else {
                    echo  "Guset";
                } ?>
            </span>
        </section>


    </header>

    <main class="formpage">
        <h1 class="text-center"> Create New Trip </h1>
        <div class="d-flex justify-content-center mt-5 flex-wrap">
            <form action="path_choose.php" method="POST" class="rec-white col-md-8 mb-5">
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="col-md-3">
                        <label> Amount of trip</label>
                        <input type="number" class="form-control" id="amount"  name="amount" placeholder="0 $" min="0" pattern="[0+]" required>
                    </div>

                    <div class="col-md-3">
                        <label> Type Of Trip</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" value="1">
                            <label class="form-check-label">Nature</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" value="2">
                            <label class="form-check-label">Beach</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" value="3">
                            <label class="form-check-label">Sport</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" value="4">
                            <label class="form-check-label">Quiet</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" value="5">
                            <label class="form-check-label">Party </label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label> Select the age</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" value="1">
                            <label class="form-check-label">18-25</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" value="2">
                            <label class="form-check-label">26-35</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" value="3">
                            <label class="form-check-label">26-45</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" value="4">
                            <label class="form-check-label">46-60</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" value="5">
                            <label class="form-check-label">60 +</label>
                        </div>
                    </div>


                </div>

                <div class="d-flex justify-content-around flex-wrap mt-4">

                    <div class="col-md-3">
                        <label for="continents" class="form-label" >Choose continent</label>
                        <select id="continents" class="form-select" name="continent" required>
                            <option value="">...</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="control-label" for="date">Start Date</label>
                        <input class="form-control" id="date" name="dateStart" placeholder="MM/DD/YYY" type="text">
                    </div>


                    <div class="col-md-3">
                        <label class="control-label" for="date">End date</label>
                        <input class="form-control" id="date" name="dateEnd" placeholder="MM/DD/YYY" type="text">
                    </div>

                </div>


                <div class="beige-rec pb-5 pt-3 mt-4" id="form-part-two">
                    <div class="d-flex justify-content-around flex-wrap">


                        <div class="col-md-3">
                            <label class="form-label" for="inputCountry">Choose Country</label>
                            <select id="inputCountry" name="inputCountry1" class="form-select country">
                                <option value="">...</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label> Choose Town</label>


                            <div class="form-check" id="areas">
                                <!--<input class="form-check-input" type="checkbox" name="TypeofTrip" value="Brasilia">
                            <label class="form-check-label" for="flexCheckDefault"></label> -->
                            </div>


                        </div>
                    </div>


                </div>

                <input name="NumDest" id="NumDest" value="1">

                <div class="d-block" id="pre">

                    <button type="button" class="btn btn-outline-success mt-5 mb-5" id="count">
                        Add destination
                        <img src="./images/PLUS.png" alt="plus">
                    </button>

                    <input type="submit" class="btn btn-primary new-color bouton-form mt-5 mb-5" value="Search"></input>
                </div>
            </form>
        </div>
    </main>
</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>