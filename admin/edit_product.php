<?php
include'../config.php';
if(isset($_POST['product_class'])) {
    $product_class = $_POST['product_class'];
    $id = $_POST['id'];
    $query1 = "SELECT * FROM products WHERE id='$id'";
    $result = $mysqli->query($query1);
    $row = $result->fetch_array();
        if ($row['product_name'] != $_POST['product_name'] and $_POST['product_name'] != '') {
            $input = $_POST['product_name'];
            $minerow = 'product_name';
            $query2 = "UPDATE products SET `$minerow`='$input' WHERE product_class='$product_class' AND id='$id'";
            $mysqli->query($query2);
        }
        if ($row['product_desc']!=addslashes($_POST['product_desc']) and $_POST['product_desc']!='') {
            $input = addslashes($_POST['product_desc']);
            $minerow = 'product_desc';
            $query2 = "UPDATE products SET `$minerow`='$input' WHERE product_class='$product_class' AND id='$id'";
            $mysqli->query($query2);
        }
        if ($row['price']!= $_POST['price'] and $_POST['price'] != '') {
            $input = $_POST['price'];
            $minerow = 'price';
            $query2 = "UPDATE products SET `$minerow`='$input' WHERE product_class='$product_class' AND id='$id'";
            $mysqli->query($query2);
        }
        if (isset($_FILES['img']) and $_FILES['img']['error'] == 0) {
            $product_class = $_POST['product_class'];
            include'class_checker.php';
            $info = pathinfo($_FILES['img']['name']);
            $ext = $info['extension'];
            $newname = "$id." . $ext;
            $input=$main_product_class.'/'.$product_class.'/'.$newname;
            $directory = '../'.'img/'.$main_product_class.'/'.$product_class.'/'.$newname;
            move_uploaded_file($_FILES['img']['tmp_name'], $directory);
            $minerow = 'product_img_name';
            $query2 = "UPDATE products SET `$minerow`='$input' WHERE product_class='$product_class' AND id='$id'";
            $mysqli->query($query2);
        }
    header("Location:products_list.php");
        }

