<?php
if(isset($_GET['brand'])){
    $query="SELECT * FROM brand WHERE sub_class_id=".$_SESSION['sub_class_id'];
    $result=$mysqli->query($query);
    while($row=$result->fetch_array()){
if ($_GET['brand'] == $row['brand']) {
    $brand=$row['brand'];
    $results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class' AND product_brand='$brand'  ORDER BY id ASC LIMIT $start, $limit");}
    }
if ($_GET['brand'] == '100-200') {
$results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class' AND price BETWEEN 100 AND 200 ORDER BY id ASC LIMIT $start, $limit");
}
if ($_GET['brand'] == '200-300') {
$results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class' AND price BETWEEN 200 AND 300 ORDER BY id ASC LIMIT $start, $limit");
}
if ($_GET['brand'] == '300-400') {
$results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class' AND price BETWEEN 300 AND 400 ORDER BY id ASC LIMIT $start, $limit");
}
if ($_GET['brand'] == '400-h') {
$results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class' AND price BETWEEN 400 AND (SELECT MAX(price) FROM products) ORDER BY id ASC LIMIT $start, $limit");
}
if ($_GET['brand'] == 'High-Low') {
$results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class'  ORDER BY price DESC LIMIT $start, $limit");
}
if ($_GET['brand'] == 'Low-High') {
$results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class' ORDER BY price ASC LIMIT $start, $limit");
}
if ($_GET['brand'] == 'A-Z') {
$results = $mysqli->query("SELECT * FROM `products` WHERE product_class='$product_class' ORDER BY `products`.`product_name` ASC LIMIT $start, $limit");
}
if ($_GET['brand'] == 'Z-A') {
$results = $mysqli->query("SELECT * FROM `products` WHERE product_class='$product_class' ORDER BY `products`.`product_name` DESC LIMIT $start, $limit");
}
include 'db.php';
}
else{
$results = $mysqli->query("SELECT * FROM products WHERE product_class='$product_class' ORDER BY id ASC LIMIT $start, $limit");
include'db.php';
}
?>