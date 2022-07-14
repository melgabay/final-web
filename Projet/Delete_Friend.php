<?php 

    //create a mySQL DB connection:

	include "config.php";


    //testing connection success

    include "logincheak.php"; 

?>

<?php 
    $userdId = $_SESSION["user_id"];
	$IdFriend= $_GET["id"];

     
	$query 	= "DELETE  FROM tbl_user_friend_206 WHERE u_id=" . $userdId ." AND f_id=".$IdFriend ;

    echo $query;
	$result = mysqli_query($connection, $query);


    if($result==true) {
        header('Location:my_friends.php?&Delete=1');
	}

	else 
    {
        header('Location:my_friends.php?&Delete=0');
    }

?>

