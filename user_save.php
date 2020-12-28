<?php 
include "./dbconnection.php";
include "./User.php";

$database = new Database;
$db = $database->connection();

$userObj = new User($db);

if (isset($_POST['submit'])) 
{	
	$name = $_POST['user_name'];
	$phone = $_POST['user_phone'];

	$insert_user = $userObj->userAdd($name,$phone);

	$userObj->redirect("user_list.php?added=1");
}



?>