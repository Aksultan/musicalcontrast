<?php
if(isset($_GET['input']) && $_GET['input']!=''){
    include 'config.php';
    $input=htmlspecialchars($_GET['input']);
    $query="SELECT * FROM products WHERE product_name LIKE '%$input%'";
    $result=$mysqli->query($query);
    if(mysqli_num_rows($result)>0){
        while($row=$result->fetch_array()){
            echo '<li><div class="form"><a href="product_page.php?&id='.$row['id'].'&product_class='.$row['product_class'].'" style="float:left;">'.$row['product_name'].
                '</a><img src="img/'.$row['product_img_name'].'">
</div></li>';
        }
    }
    else{
            echo '<li>Sorry, we dont have such product in our shop..</li>';
    }
}

?>