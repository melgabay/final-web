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
    <script src="js/find_friend.js"></script>


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
                    <li class="nav-item"><a class="nav-link  " aria-current="page" href="index.php">Homepage</a></li>
                    <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                    <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                    <li class="nav-item"><a class="nav-link active" href="find_friend.php">Find Friend</a></li>
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
                <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                <li class="nav-item"><a class="nav-link  active" href="find_friend.php">Find Friend</a></li>
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
            <a href="profile_page.php?id=<?php echo   $userdId . '"'; ?>  class="d-flex justify-content-center">
                <?php echo '<img src="' . $rowUser["picture"] . '" class="photo_profil" alt="' . $rowUser["picture"] . '"/>'; ?>
            </a>
            <span>Hello
                <?php echo   $rowUser["name"]; ?>
            </span>
        </section>
    </header>

    <main class="ffmain">
        <?php

        //get data from DB

        $query     = "SELECT * FROM tbl_trips_206 t  inner join tbl_user_trips_206 u
        ON t.t_id=u.t_id WHERE u.u_id=" . $_SESSION["user_id"] . "";

        $result = mysqli_query($connection, $query);

        if (!$result) {

            die("DB query failed.");
        }

        ?>

        <form class="rec-white find-friend-page">
            <h3> How would you like to search for Friend</h3>

            <div class="d-flex d1">
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Search by trip</label>
                    <select id="inputState" class="form-select" name="tripId" required>
                        <option value="">...</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row["t_id"] . '">' . $row["t_name"] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <?php

                //get data from DB
                $queryDest     = "SELECT * from tbl_destination_206";
                $resultDest = mysqli_query($connection, $queryDest);

                ?>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Search by Destination</label>
                    <select id="inputState" class="form-select" name="destId" required>
                        <option value="">...</option>
                        <?php
                        while ($rowDest = mysqli_fetch_assoc($resultDest))
                            echo '<option value="' . $rowDest["d_id"] . '">' . $rowDest["destination_name"] . '</option>';
                        ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="control-label" for="date">Search by date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/YYY" type="text" />
                </div>
            </div>


            <div class="d-flex d1">
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Search by trip Charactere</label>
                    <select id="inputState" class="form-select" name="charactere" required>
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
                    <select id="inputState" class="form-select" name="ages" required>
                        <option value="">...</option>
                        <option value="1">18-25</option>
                        <option value="2">26-35</option>
                        <option value="3">36-45</option>
                        <option value="4">46-60</option>
                        <option value="5">60+</option>
                    </select>
                </div>



            </div>

            </div>

            <button type="button" class="btn btn-primary new-color bouton-vert">Search</button>

        </form>

        <h2> Friend List:</h2>

        <div class="ffp" id="friend_result">

        </div>

        <button type="button" class="btn btn-primary new-color ffp">Explore More Friend</button>
    </main>
</body>

</html>


<?php

//close DB connection

mysqli_close($connection);

?>