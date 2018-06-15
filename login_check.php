<?php
include 'config.php';
if(isset($_GET['login'])){
    $login=$_GET['login'];
$query="SELECT login FROM users WHERE login='$login'";
$result=$mysqli->query($query);
}
if(empty($_GET['login'])){
    echo 1;
}
else{
if((mysqli_num_rows($result))>0){
    echo 1;
}
else{
    echo 0;
}
}

?>