<?php
include'../config.php';
$id=$_POST['id'];
$query="DELETE FROM products WHERE id='$id'";
if($mysqli->query($query)){
    header("Location:products_list.php");
}
?>