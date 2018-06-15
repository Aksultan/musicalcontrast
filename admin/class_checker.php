<?php
$query="SELECT main_class_id FROM sub_class WHERE sub_class='$product_class'";
$result=$mysqli->query($query);
while($row=$result->fetch_array()){
    $query2="SELECT main_class FROM main_class WHERE id=".$row['main_class_id'];
    $result=$mysqli->query($query2);
    while($rom=$result->fetch_array()){
        $main_product_class=$rom['main_class'];
    }
}
?>