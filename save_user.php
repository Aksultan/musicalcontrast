<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['name'])) {$name=$_POST['name'];if($name===''){unset($name);}}
if (isset($_POST['surname'])) {$surname=$_POST['name'];if($surname==''){unset($surname);}}
if (isset($_POST['password'])) {$password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['country'])) {$country=$_POST['country'];if ($country==''){unset($country);}}
if (isset($_POST['address'])) {$address=$_POST['address'];if($address==''){unset($address);}}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$name = stripslashes($name);
$name = htmlspecialchars($name);
$surname = stripslashes($surname);
$surname = htmlspecialchars($surname);
$country = stripslashes($country);
$country = htmlspecialchars($country);
$address = htmlspecialchars($address);

$login = trim($login);
$password = trim($password);

include("config.php");

$result =$mysqli->query("SELECT id FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
$result2 ="INSERT INTO users (login,password,name,surname,address,country,type) VALUES('$login','$password','$name','$surname','$address','$country',0)";
if ($mysqli->query($result2))
{
    header("Location:Afterreg.php");
}
?>