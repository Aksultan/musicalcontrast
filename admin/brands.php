<?php
include '../config.php';
    if(isset($_GET['product_class'])){
        echo'<label for="brand">Products brand:</label><br>
<select id="brand" name="brand" required>';
        $sub_class=$_GET['product_class'];
    $query2="SELECT * FROM sub_class WHERE sub_class='$sub_class'";
    $result2=$mysqli->query($query2);
    while($row=$result2->fetch_array()){
        $query="SELECT * FROM brand WHERE sub_class_id=".$row['id'];
        $result=$mysqli->query($query);
        echo'<optgroup label="'.$row['sub_class'].'">';
        while($obj=$result->fetch_array()){
            echo'<option value="'.$obj['brand'].'">'.$obj['brand'].'</option>';
        };
        echo'</optgroup></select>';
    }}
    ?>

