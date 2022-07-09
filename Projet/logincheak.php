
<?php 

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()) {

die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"

);

}
session_start();


if(!isset($_SESSION["user_id"])) {

echo 'no user id';

header('Location:index.php');

} 

?>