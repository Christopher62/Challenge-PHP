<?php
session_start();
$_SESSION = array();
include_once("connexionExo.php");
$user = $_POST['pseudo'];
$pwd = $_POST['password'];

$user = mysqli_real_escape_string($cnx,$user);
$pwd = mysqli_real_escape_string($cnx,$pwd);

$res = mysqli_query($cnx,
"SELECT * FROM ChallPHP WHERE pseudo='$user' AND password='$pwd' LIMIT 1");
$_SESSION['data'] = mysqli_fetch_assoc($res);


if( mysqli_num_rows($res) ){
  $_SESSION['login'] = "yes";
}else{
  $_SESSION['login'] = "no";
}

header("location:adminForm.php");
?>
