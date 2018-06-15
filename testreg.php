<?php
session_start();
if (isset($_GET['login'])) { $login = $_GET['login'];}
if (isset($_GET['password'])) { $password=$_GET['password'];}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
include("config.php");
$result = $mysqli->query("SELECT * FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);

if(empty($login) or empty($password)){
    echo 'empty';
}
else{
if((mysqli_num_rows($result))==0){
    echo 'no user';
}
else{
if($myrow['password']!=$password){
    echo 'paserror';
}
     else if($myrow['type']==1){
        $_SESSION['login']=$myrow['login'];
        echo 'admin';
    }
else if ($myrow['password']==$password) {
    $_SESSION['login']=$myrow['login'];
    $_SESSION['id']=$myrow['id'];
    echo 'success';
}}}
?>