<?php
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):'';
if(!empty($_POST['comment'])){
    include 'config.php';
    $product_id=$_POST['product_id'];
    $login=$_POST['login'];
    $add_date=$_POST['add_date'];
    $comment=$_POST['comment'];
    $query="INSERT INTO comments VALUES (null,'$product_id','$login','$comment','$add_date')";
    if($mysqli->query($query)){
        header('Location:'.$return_url);
    }

}
else{
    header('Location:'.$return_url);
}