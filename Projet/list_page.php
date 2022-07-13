<?php

//create a mySQL DB connection:

include "config.php";


//testing connection success

include "logincheak.php";


?>

<?php

//get data from DB

$query     = "SELECT * FROM tbl_trips_206 t  inner join tbl_user_trips_206 u
    ON t.t_id=u.t_id WHERE u.u_id=" . $_SESSION["user_id"] . "
    ORDER BY start_date "; //change by date by default


$result = mysqli_query($connection, $query);

if (!$result) {

    die("DB query failed.");
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

    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/list_page.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script defer="" src="js/list_page.js"></script>
    <script defer="" src="js/script.js"></script>

    <title>TripDream</title>
    <!-- fav icone -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header class="d-flex justify-content-between pl-3 pr-3 align-items-center">
        <input type="checkbox" id="hamburger-input" class="burger-shower" />
        <label id="hamburger-menu" for="hamburger-input">
            <nav id="sidebar-menu">
                <h3>Menu</h3>
                <ul>
                    <li class="nav-item"><a class="nav-link " aria-current="page" href="index.php">Homepage</a></li>
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
            <a href="profile_page.php?id=<?php echo   $userdId . '"'; ?>  class=" d-flex justify-content-center">
                <?php echo '<img src="' . $rowUser["picture"] . '" class="photo_profil" alt="' . $rowUser["picture"] . '"/>'; ?>
            </a>
            <span>Hello
                <?php echo   $rowUser["name"]; ?>
            </span>
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
                        $rowCount = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr class="clickable-row" data-href="ObjectPage.php?prodId=' . $row["t_id"] . '">';
                            echo    '<th scope="row">' . $rowCount . '</th>';
                            echo    '<td>' . $row["t_name"] . '</td>';
                            echo    '<td>' . $row["start_date"] . '</td>';
                            echo    '<td>' . $row["end_date"] . '</td>';
                            echo     '<td>' . $row["budget"] . '$</td>';
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