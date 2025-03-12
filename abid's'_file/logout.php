<?php

session_start();
$_SESSION['username'] = 'n';
$_SESSION['password'] = 'n';
$_SESSION['email'] = 'n';


header('Location: ../index.php');
    exit;
?>