<?php

//create a mySQL DB connection:

include "config.php";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {

    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}



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



    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/template.css">
    <!-- <link rel="stylesheet" href="css/form.css"> -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
    <script defer="" src="js/edit_profile.js"></script>


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
                    <li class="nav-item"><a class="nav-link active " aria-current="page" href="index.php">Homepage</a>
                    </li>
                    <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
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
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Homepage</a></li>
                <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
                <li class="nav-item"><a class="nav-link  " href="my_friends.php">My Friends</a></li>
            </ul>
        </nav>

        <?php


        //get data from DB
        if (isset($_GET["id"])) {
            $userdId = $_GET["id"];
            $userCheak     = "SELECT * from tbl_users_206 where u_id =" . $userdId;
            $resultUser = mysqli_query($connection, $userCheak);
            if ($resultUser) {
                $rowUser    = mysqli_fetch_assoc($resultUser);
            } else die("DB query failed.");
        } else {
            $userdId = 0;
        }


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

    <main class="editmain">

        <div class="container-xl pt-5">
            <!-- Account page navigation-->
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img <?php if ($userdId != 0) {
                                        echo ' src="' . $rowUser["picture"] . '" class="img-account-profile rounded-circle mb-2" ';
                                    } else {
                                        echo ' src="./images/somone.png"  class="photo_profil"';
                                    } ?> alt="user_picture">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary new-color" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <form <?php if ($userdId != 0) {
                                        echo 'action="edit_profile.php"';
                                    } else {
                                        echo 'action="create_profile.php"';
                                    } ?> method="POST">

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group ( name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputName">Full name</label>
                                        <input class="form-control" id="inputName" type="text" name="fullName" placeholder="Enter your full name" pattern="^[A-Za-z \s*]+$" <?php if ($userdId != 0) {
                                                                                                                                                                                echo  'value="' . $rowUser["name"] . '"';
                                                                                                                                                                            } ?> required>
                                    </div>
                                    <!-- Form Group (Interest)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputInterest">Interest</label>
                                        <input class="form-control" id="inputInterest" type="text" name="interest" iplaceholder="Enter your interests" <?php if ($userdId != 0) {
                                                                                                                                                            echo  'value="' . $rowUser["Interest"] . '"';
                                                                                                                                                        } ?> required>
                                    </div>

                                </div>


                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputCity">Residence - City</label>
                                        <input class="form-control" id="inputCity" type="text" name="city" placeholder="Enter your city" <?php if ($userdId != 0) {
                                                                                                                                                echo  'value="' . $rowUser["city"] . '"';
                                                                                                                                            } ?> required>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputCountry">Residence - Country</label>
                                        <input class="form-control" id="inputCountry" type="text" name="country" placeholder="Enter your country" <?php if ($userdId != 0) {
                                                                                                                                                        echo  'value="' . $rowUser["country"] . '"';
                                                                                                                                                    } ?> required>
                                    </div>

                                    <!-- Form Group (location)-->

                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email" name="mail" placeholder="Enter your email address" <?php if ($userdId != 0) {
                                                                                                                                                            echo  'value="' . $rowUser["email"] . '"';
                                                                                                                                                        } ?> required>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group ( name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPass">Password</label>
                                        <input class="form-control" id="inputPass" type="password" name="pass" placeholder="Enter your password (only numbers)" pattern="[0-9]+" titile="passwors contain only numbers" <?php if ($userdId != 0) {
                                                                                                                                                                                                                            echo  'value="' . $rowUser["password"] . '"';
                                                                                                                                                                                                                        } ?> required>
                                    </div>
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone</label>
                                        <input class="form-control" id="inputPhone" type="text" name="phone" placeholder="Enter your phone number" pattern="[0-9]{9,10}" <?php if ($userdId != 0) {
                                                                                                                                                                                echo  'value="' . $rowUser["phone"] . '"';
                                                                                                                                                                            } ?> title="Phone Must contain 9 or 10 numbers without hyphen" required>
                                    </div>

                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone age)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputAge">Age</label>
                                        <input class="form-control" id="inputAge" type="number" placeholder="Enter your age" min="18" pattern="[18+]" name="age"
                                        <?php if ($userdId != 0) {echo  'value="' . $rowUser["age"] . '"'; } ?> required>
                                    </div>
                                    <!-- Form Group (charactere)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" class="control-label" for="Character">Favorite charactere trip</label>
                                        <select class="form-control" name="Character" id="inputCharcher" <?php if ($userdId != 0) {
                                                                                                                echo  'data-selected="' . $rowUser["favorite_charactere"] . '"';
                                                                                                            } ?> required>
                                            <option value="">Choose charactere</option>
                                            <option value="1">Chill</option>
                                            <option value="2">Sunbathing</option>
                                            <option value="3">Tracks</option>
                                            <option value="4">Nature</option>
                                            <option value="5">Field</option>
                                            <option value="6">Shopping</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (Wants tarvel to)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputDest">Wants travel to</label>
                                        <select id="inputState" class="form-control" id="inputDest" name="destId" required <?php if ($userdId != 0) {
                                                                                                                                echo  'data-selected="' . $rowUser["wants_travel_to"] . '"';
                                                                                                                            } ?>>
                                            <option value="">Choose destination</option>
                                            <?php
                                            //get data from DB
                                            $queryDest     = "SELECT * from tbl_destination_206";
                                            $resultDest = mysqli_query($connection, $queryDest);

                                            while ($rowDest = mysqli_fetch_assoc($resultDest))
                                                echo '<option value="' . $rowDest["d_id"] . '">' . $rowDest["destination_name"] . '</option>';
                                            ?>
                                        </select>
                                    </div>
                                    <!-- Form Group (In date)-->
                                    <div class="col-md-6">
                                        <label class="control-label" for="date">In date</label>
                                        <input class="form-control" id="date" name="date" placeholder="11/2022" type="text" <?php if ($userdId != 0) {
                                                                                                                                if (strlen($rowUser["dates_month"]) == 1) {
                                                                                                                                    $month = '0' . $rowUser["dates_month"];
                                                                                                                                } else {
                                                                                                                                    $month = $rowUser["dates_month"];
                                                                                                                                }
                                                                                                                                $date =  $month . '/' . $rowUser["dates_year"];

                                                                                                                                echo  'value="' . $date . '"';
                                                                                                                            }  ?>>
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <input name='button' class="btn btn-primary new-color" type="submit" id="submit-button"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p id="mes_text"></p>
                        <p class="text-secondary"><small></small></p>
                    </div>
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