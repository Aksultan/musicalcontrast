<?php
include '../config.php';
$query="SELECT * FROM products";
$result=$mysqli->query($query);
$product_class=$_POST['product_class'];
$price=$_POST['price'];
while($row=$result->fetch_array()){
    if($_POST['name']!=$row['product_name']){
        $product_name=addslashes($_POST['name']);
    }
    if($_POST['product_desc']!=$row['product_desc']){
        $product_desc=addslashes($_POST['product_desc']);
    }
}
if(isset($_POST['video'])){
    $video=$_POST['video'];
}
if(isset($_POST['brand'])){
    $brand=$_POST['brand'];
}
if (isset($_FILES['img']) and $_FILES['img']['error'] == 0) {
    include'class_checker.php';
    $info = pathinfo($_FILES['img']['name']);
    $ext = $info['extension'];
    $newfilename=(rand(100000000,0)).'.'.$ext;
    $input=$main_product_class.'/'.$product_class.'/'.$newfilename;
    $directory = '../img/'.$main_product_class.'/'.$product_class.'/'.$newfilename;
    move_uploaded_file($_FILES['img']['tmp_name'], $directory);
}
$product_code=$_POST['product_code'];
$query="INSERT INTO products VALUES (null,'$product_code','$product_name','$product_desc','$input','$price','$product_class','$video','$brand')";
if($mysqli->query($query)){
    header("Location:adding_page.php");
}
