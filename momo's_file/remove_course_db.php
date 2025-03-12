<?php
$connection = mysqli_connect('localhost:3306', 'root');
mysqli_select_db($connection, "Hackathon");


session_start();
$email = $_SESSION['email'];

if ($email == "n") {
    header('Location: ../abid\'s_file/login_first.php');
    exit;
}

$username=$_SESSION['username'];
$password=$_SESSION['password'];
$current_course=$_SESSION['current_course'];

$query_check = "UPDATE `userInfo` SET `$current_course` = 'not enrolled' WHERE `username`='$username' and `password`='$password'";
$result_check = mysqli_query($connection, $query_check);

header('Location: ../abid\'s_file/successfull.php');
    exit;
?>