<?php
    $email = $_GET["email"];
    $password = $_GET["password"];
    $remember = $_GET["Remember"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php


        echo "<script>console.log('" . $email . "');</script>";
        echo "<script>console.log('" . $password . "');</script>";
        echo "<script>console.log('" . $remember . "');</script>";

    ?>
</head>
<body>
    Your email address is: <?php echo $email ?><br>
    Your password is: <?php echo $password ?><br>
    Remember is: <?php echo $remember ?>
</body>
</html>

<?php
    header("Location: homepage.php")
?>