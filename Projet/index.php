
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
    if(!empty($_POST["email"])) {

        // echo 'Form sent';



        $email = $_POST["email"];
        $password = $_POST["password"];

        $query 	= "SELECT u_id FROM tbl_users_206 where tbl_users_206.email='" .$email. "' AND tbl_users_206.password='" .$password . "'";

        $result = mysqli_query($connection , $query);
    

        $row    = mysqli_fetch_array($result);

        if(is_array($row)) {

            echo 'Authentication success !';



            session_start();

             

            $_SESSION["user_id"] = $row["u_id"];

            header('Location:homepage.php');


        } else {

            $message = "Invalid username or password !";

        }

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/index.css">

    <script defer="" src="js/list_page.js"></script>

    <title>TripDream</title>
</head>

<body>

    <header class="d-flex justify-content-between">
        <a href="index.php"><img src="./images/logo.png" alt="logo"></a>
        <section class="prof-pic">
            <a href="#" class="user_pic index"></a>
            <span>Hello Guest</span>
        </section>
    </header>


    <main>
        <div class="h1_template">
            <h1>Connect</h1>
        </div>

        <form action="#" method="POST" class="form-index d-flex flex-column align-items-center text-center">
            <label for="exampleInputEmail1">Enter an email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" name="email" required>

            <label for="exampleInputPassword1" class="pswrd">Password</label>
            <input type="password" class="form-control " id="exampleInputPassword1" placeholder="Password"
                name="password" required>

            <button type="submit" class="btn btn-primary index d-flex justify-content-center">Sign in</button>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>   

        </form>

        <div class="or-container d-flex align-items-center">
            <div class="line-separator"></div>
            <div class="or-label text-center">or</div>
            <div class="line-separator"></div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-dark">
                <img src="https://img.icons8.com/color/16/000000/google-logo.png">
                Login With Google
            </button>
        </div>
        <footer class="footer-index d-flex justify-content-center align-items-center">
            <a href="#"> Sign Up</a>
            <a href="#"> Forgot my password</a>
        </footer>

    </main>

</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>