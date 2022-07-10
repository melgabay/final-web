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
    <link rel="stylesheet" href="css/homepage.css">

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
                <a class="nav-link active" aria-current="page" href="homepage.php">Homepage</a>
                <a class="nav-link  " href="form.php">Create New Trip</a>
                <a class="nav-link " href="list_page.php">My Trips</a>
                <a class="nav-link  " href="find_friend.php">Find Friend</a>
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
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="homepage.php">Homepage</a>
                </li>
                <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
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

    <!-- <header class="d-flex justify-content-between">
        <input type="checkbox" id="hamburger-input" class="burger-shower" />
        <label id="hamburger-menu" for="hamburger-input">
            <nav id="sidebar-menu">
                <h3>Menu</h3>
                <ul>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="homepage.php">Homepage</a>
                    </li>
                    <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                    <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                    <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
                </ul>
            </nav>
        </label>

        <div class="overlay"></div>
        <a href="index.php"><img src="./images/logo.png" alt="logo"></a>

        <nav id="main-menu">
            <ul class="d-flex justify-content-around align-items-center">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="homepage.php">Homepage</a>
                </li>
                <li class="nav-item"><a class="nav-link  " href="form.php">Create New Trip</a></li>
                <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
                <li class="nav-item"><a class="nav-link  " href="find_friend.php">Find Friend</a></li>
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
    </header> -->



    <div class="mont d-flex justify-content-center">
        <!-- <div class="div-in-div d-flex align-items-center text-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus atque recusandae fuga esse
                consequatur eum maiores odio, quasi at cupiditate explicabo velit fugit provident fugiat tenetur neque,
                modi possimus sequi.</p>
            <button type="button" class="btn btn-primary new-color">Create Your Next Trip</button>

        </div> -->
        <button type="button" class="btn btn-primary new-color emf  mb-5">Create new Trip</button>

    </div>

    <main class="hpmain">
        <h2>Recommended Trips:</h2>
        <div class="ffp">
            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/safari.png" alt="safari">
                <div class="card-body">
                    <!-- <a href="#"> -->
                    <h3>African Safari</h3>
                    <p class="card-text ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto
                        quaerat velit sequi eos ipsum nam aliquam doloremque.
                        Eos, aliquam sapiente beatae, nihil officiis consequatur praesentium voluptatem recusandae
                        repudiandae sit illo.</p>
                    <a class="textgreen" href="#"> Learn more</a>
                    <!-- </a> -->
                </div>
            </div>

            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/brazil festival.png" alt="brazil">
                <div class="card-body">
                    <!-- <a href="#"> -->
                    <h3>Brazil Festival</h3>
                    <p class="card-text ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto
                        quaerat velit sequi eos ipsum nam aliquam doloremque.
                        Eos, aliquam sapiente beatae, nihil officiis consequatur praesentium voluptatem recusandae
                        repudiandae sit illo.</p>
                    <a class="textgreen" href="#"> Learn more</a>
                    <!-- </a>     -->
                </div>
            </div>

            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/europe.png" alt="europe">
                <div class="card-body">
                    <!-- <a href="#"> -->
                    <h3>Europe by Trains</h3>
                    <p class="card-text ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto
                        quaerat velit sequi eos ipsum nam aliquam doloremque.
                        Eos, aliquam sapiente beatae, nihil officiis consequatur praesentium voluptatem recusandae
                        repudiandae sit illo.</p>
                    <a class="textgreen" href="#"> Learn more</a>
                    <!-- </a> -->
                </div>
            </div>


            <div class="card offp" style="margin-bottom: 10%;">
                <img src="./images/china.png" alt="china">
                <div class="card-body">
                    <!-- <a href="#"> -->
                    <h3>Explore China</h3>
                    <p class="card-text ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto
                        quaerat velit sequi eos ipsum nam aliquam doloremque.
                        Eos, aliquam sapiente beatae, nihil officiis consequatur praesentium voluptatem recusandae
                        repudiandae sit illo.</p>
                    <a class="textgreen" href="#"> Learn more</a>
                    <!-- </a> -->
                </div>
            </div>
        </div>
        <h2 class="yourfriend">Your friends:</h2>

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
        <button type="button" class="btn btn-primary new-color emf ex ">Explore More Friend</button>

        <!-- <div class="homepage">

                <div class="frec">
                    <a href="#">
                        <div class="rec">
                            <img src="./images/safari.png" alt="safari">
                            <div class="m-2">
                                <h3>African Safari</h3>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At minima eveniet numquam, quidem sunt magnam voluptatem reprehenderit fuga,
                                    corporis dolores ullam quasi, odit distinctio beatae autem. Perferendis magni doloremque ad.</p>
                                <p class="textgreen"> Learn more</p>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="rec">
                            <img src="./images/brazil festival.png" alt="brazil">
                            <div class="m-2">
                                <h3>Brazil Festival</h3>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At minima eveniet numquam, quidem sunt magnam voluptatem reprehenderit fuga,
                                    corporis dolores ullam quasi, odit distinctio beatae autem. Perferendis magni doloremque ad.</p>
                                <p class="textgreen"> Learn more</p>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="rec">
                            <img src="./images/europe.png" alt="europe">
                            <div class="m-2">
                                <h3>Europe by Trains</h3>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At minima eveniet numquam, quidem sunt magnam voluptatem reprehenderit fuga,
                                    corporis dolores ullam quasi, odit distinctio beatae autem. Perferendis magni doloremque ad. </p>
                                <p class="textgreen"> Learn more</p>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="rec">
                            <img src="./images/china.png" alt="china">
                            <div class="m-2">
                                <h3>Explore China</h3>
                                <p class="text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At minima eveniet numquam, quidem sunt magnam voluptatem reprehenderit fuga,
                                    corporis dolores ullam quasi, odit distinctio beatae autem. Perferendis magni doloremque ad.</p>
                                <p class="textgreen"> Learn more</p>
                            </div>
                        </div>
                    </a>

                </div> 

                <h2> Find friends to travel with:</h2>
                <div class="trec">
                    <a href="#">
                        <div class="arec">
                            <div class="d-flex">
                                <img src="./images/man picture.png" alt="man picture">
                                <h3>Asaf Levi</h3>
                            </div>
                            <p> <b> From: </b> Tel Aviv, Israel <br>
                                <b> Age: </b> 27 <br>
                                <b> Wants to travel to: </b> South America from May-August <br>
                                <b> Interest: </b> Hiking, Nature, History, Explore cultures.<br>
                            </p>
                            <button type="button" class="btn btn-primary new-color">Talk to me</button>
                        </div>
                    </a>

                    <a href="#">
                        <div class="arec">
                            <div class="d-flex">
                                <img src="./images/women picture.png" alt="women picture">
                                <h3>Shira Naor</h3>
                            </div>
                            <p> <b> From: </b> Jerusalem, Israel <br>
                                <b> Age: </b> 24 <br>
                                <b> Wants to travel to: </b> New- Tork in September. <br>
                                <b> Interest: </b> Museoms, Theaters, Arts.<br>
                            </p>
                            <button type="button" class="btn btn-primary new-color">Talk to me</button>
                        </div>
                    </a>

                    <a href="#">
                        <div class="arec">
                            <div class="d-flex">
                                <img src="./images/other man picture.png" alt="man">
                                <h3>Oren Gal</h3>
                            </div>
                            <p> <b> From: </b> Haifa, Israel <br>
                                <b> Age: </b> 32 <br>
                                <b> Wants to travel to: </b> Europe in July <br>
                                <b> Interest: </b> Shopping, Food, Parties.<br>
                            </p>
                            <button type="button" class="btn btn-primary new-color">Talk to me</button>
                        </div>
                    </a>

                    <a href="#">
                        <div class="arec">
                            <div class="d-flex">
                                <img src="./images/other women picture.png" alt="women">
                                <h3>Adi Halfon</h3>
                            </div>
                            <p> <b> From: </b> Beer Sheva, Israel <br>
                                <b> Age: </b> 21 <br>
                                <b> Wants to travel to: </b> India from June 22- September 23 <br>
                                <b> Interest: </b> Chill, Spirituality.<br>
                            </p>
                            <button type="button" class="btn btn-primary new-color">Talk to me</button>
                        </div>
                    </a>

                </div> 

                


            </div>  -->
    </main>

</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>