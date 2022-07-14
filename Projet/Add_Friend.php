<?php 

    //create a mySQL DB connection:

	include "config.php";


    //testing connection success

    include "logincheak.php"; 

?>

<?php 
    $userdId = $_SESSION["user_id"];
	$IdFriend= $_GET["id"];

     
	$query 	= "insert into tbl_user_friend_206 value($userdId,$IdFriend)" ;

	$result = mysqli_query($connection, $query);


    if($result==true) {
        header('Location:find_friend.php?&Add=1');
	}

	else 
    {
        header('Location:find_friend.php?&Add=0');
    }

?>

