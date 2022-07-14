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
    <script defer="" src="js/list_page.js"></script>
    <script defer="" src="js/choose_path.js"></script>


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
            <a href="profile_page.php?id=<?php echo   $userdId . '"'; ?>  class=" d-flex justify-content-center">
                <?php echo '<img src="' . $rowUser["picture"] . '" class="photo_profil" alt="' . $rowUser["picture"] . '"/>'; ?>
            </a>
            <span>Hello
                <?php echo   $rowUser["name"]; ?>
            </span>
        </section>
    </header>


    <main class="path-main">
        <h1 class="text-center">Choose Path</h1>

         <?php echo $_POST["NumDest"] ?>
    </form>
        <div class="pathre">
                
            <div id="trip_destnations1" class="trip_destnations1">
                <div class="blanc-rec">

                <?php 
                echo '<input name ="amount" style="display:none" value='.$_POST["amount"].'>';
                echo '<input name ="age" style="display:none" value='.$_POST["age"].'>';
                echo '<input name ="type" style="display:none" value='.$_POST["type"].'>';
                echo '<input name ="dateStart" style="display:none"  value='.$_POST["dateStart"].'>';
                echo '<input name="dateEnd" style="display:none" value='.$_POST["dateEnd"].'>';
                echo '<input name="continent" style="display:none" value='.$_POST["continent"].'>';


                for ($i = 1; $i <= $_POST["NumDest"]; $i++)
                {
                echo   '<div class="destnation">';
                 echo         '<div class="des_img">';
                 echo          '<img src="images/Vector 3.png">';
                 echo          '<img src="images/dest'.$i.'.png">';
                 echo         '<img src="images/dots.png">';
                 echo         '<img src="images/bus.png">';
                echo      '</div>';
                echo      '<div class="area_list">';
                $inputcountry='inputCountry'.$i;
                echo          '<h3>'.$_POST[$inputcountry].'</h3>';
                echo          '<img src="images/Vector 4.png">';
                $inputArea='areas'.$i;
                foreach( $_POST[$inputArea] as $key => $value ) {
                    echo '<p>'.$value.'</p>';

                }
                echo           '<section>';
                echo               '<p>Total:7000 &nbsp;₪</p>';
                echo          '</section>';
                echo      '</div>';
                echo  '</div>';
               }?>
                 </div>
                
    
            <button type="button" class="btn btn-primary new-color d-flex choose">Save this trip</button> 

            </div>

        </div>
        <form>

    </main>

</body>

</html>