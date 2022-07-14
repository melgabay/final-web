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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>



    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <!-- <link rel="stylesheet" href="css/form.css"> -->
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script defer="" src="js/list_page.js"></script>
    <script defer="" src="js/script.js"></script>


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
                    <li class="nav-item"><a class="nav-link " href="find_friend.php">Find Friend</a></li>
                    <li class="nav-item"><a class="nav-link  active" href="my_friends.php">My Friends</a></li>
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
                <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
                <li class="nav-item"><a class="nav-link  active" href="my_friends.php">My Friends</a></li>
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

    <main class="ffmain myfriend">
        <div id="wrapper">

            <h2 class="yourfriend">Your friends:</h2>


            <?php

            //get data from DB
            $queryFirend    = "SELECT * FROM tbl_user_friend_206 f
            inner join tbl_users_206  u on f.f_id=u.u_id  where f.u_id=" . $userdId;
            $resultFriend = mysqli_query($connection, $queryFirend);

            if ($resultFriend) {
            } else die("DB query failed.");



            ?>

            <div class="d-flex flex-wrap homegap">
                <?php
                $rowCount = 0;
                while ($rowFriend = mysqli_fetch_assoc($resultFriend)) {
                    echo  '<div class="media rec-white">';
                    echo     '<img class="align-self-start mr-3 img-fluid ml-3 mt-3" src="' . $rowFriend["picture"] . '" alt="man picture">';
                    echo     '<div class="media-body mt-3">';
                    echo         '<h3>' . $rowFriend["name"] . '</h3>';
                    echo         '<p><b>From:</b> ' . $rowFriend["city"] . ',' . $rowFriend["country"] . '</p>';
                    echo         '<p><b>Age:</b>' . $rowFriend["age"] . '</p>';

                    $queryDest    = "SELECT * FROM tbl_destination_206 d
               where d.d_id=" . $rowFriend["wants_travel_to"];
                    $resultDest = mysqli_query($connection, $queryDest);

                    if ($rowDest = mysqli_fetch_assoc($resultDest)) {
                    } else die("DB query failed.");

                    echo          '<p><b>Wants to travel to:</b>' . $rowDest["destination_name"] . 'in ' . $rowFriend["dates_month"] . '/'
                        . $rowFriend["dates_year"] . ' </p>';
                    echo         '<p><b>Interest:</b>' . $rowFriend["Interest"] . '</p>';
                    echo   '</div>';
                    echo   '<a href="Delete_Friend.php?id=' . $rowFriend["u_id"] . '" class="btn btn-primary new-color  mt-2 mr-2">Delete Friend</a>';
                    $rowCount++;
                    echo   '</div>';
                }
                if ($rowCount = 0)
                    echo '<h3>You dont have friends<h3>'
                ?>


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