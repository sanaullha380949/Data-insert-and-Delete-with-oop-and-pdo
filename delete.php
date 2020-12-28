<?php
include './dbconnection.php';
include './User.php';
//create database object
$database=new Database;
$db=$database->connection();
//create user object
$userobj=new User($db);
$id = $_POST['user_id'];

$delete = $userobj->deleteUser($id);
if($delete){
    echo 1;
}