<?php

// configuration
require_once("../includes/config.php");

if(!isset($_SESSION["user_id"])){
	render("login_form.php", ["title" => "Log In "]);
}
else{
	// display all my uploads and button for new upload
}
/*
$db = new mysql_db(SERVER, USERNAME, PASSWORD,DATABASE);
    
// get image paths from database   
$populars = browseByViewcountAndType(3, 9);
$recents = browseByUploadrecentAndType(3, 9);

$friends = array();
if(isset($_SESSION["username"])){
  $username = $_SESSION["username"];
  $friends = browseByFriendshare($username, 3);
}
// render home page for image, can be changed to video later
render("image_homepage.php", ["populars" => $populars, "recents" => $recents, "friends" => $friends]);
$db->sql_close();
*/
?>

