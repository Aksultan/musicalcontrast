<?php
include "../config.php";
$query1="SELECT * FROM users";
$id=$_POST['id'];
$result=$mysqli->query($query1);
$row=$result->fetch_array();
if(!empty($_POST['name']) and $_POST['name']!=$row['name']){
    $input=$_POST['name'];
    $rowtype='name';
    $query2="UPDATE users SET $rowtype='$input' WHERE id='$id'";
    $mysqli->query($query2);
}
 if(!empty($_POST['surname']) and $_POST['surname']!=$row['surname']){
    $input=$_POST['surname'];
    $rowtype='surname';
    $query2="UPDATE users SET $rowtype='$input' WHERE id='$id'";
    $mysqli->query($query2);
}
 if(!empty($_POST['login']) and $_POST['login']!=$row['login']){
    $input=$_POST['login'];
    $rowtype='login';
    $query2="UPDATE users SET $rowtype='$input' WHERE id='$id'";
    $mysqli->query($query2);
}
 if(!empty($_POST['address']) and $_POST['address']!=$row['address']){
    $input=$_POST['address'];
    $rowtype='address';
    $query2="UPDATE users SET $rowtype='$input' WHERE id='$id'";
    $mysqli->query($query2);
}
 if(!empty($_POST['country']) and $_POST['country']!=$row['country']){
    $input=$_POST['country'];
    $rowtype='country';
    $query2="UPDATE users SET $rowtype='$input' WHERE id='$id'";
    $mysqli->query($query2);
}
 if(!empty($_POST['password']) and $_POST['password']!=$row['password']){
    $input=$_POST['password'];
    $rowtype='password';
    $query2="UPDATE users SET $rowtype='$input' WHERE id='$id'";
    $mysqli->query($query2);
}
 if(!empty($_POST['type']) or $_POST['type']==0){
    $input=$_POST['type'];
    $rowtype='type';
    $query2="UPDATE users SET $rowtype='$input' WHERE id='$id'";
    $mysqli->query($query2);
}header("Location:users.php");