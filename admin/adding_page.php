<?php
include'nav.php';
?>
<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10" style="height: auto" xmlns="http://www.w3.org/1999/html">
    <div class="main">
        <div class="header"><br>
            <p class="hidden-xs hidden-sm">MUSICAL CONTRAST<br><span>Admin Mode</span></p>
            <p class="hidden-lg hidden-md">MUSICAL CONTRAST<br><span>Admin Mode</span></p>
        </div>
        <div class="event">
            <h2 style="text-align: center">New Product</h2>
            <div class="add">
                <form action="add_product.php" method="post" enctype="multipart/form-data">
                    <label for="name">Products name:</label>
                    <input id="name" name="name" type="text" placeholder="Product name" required>
                    <label for="desc">Products description:</label>
                    <textarea id="desc" name="product_desc" type="text" placeholder="Product description" required></textarea>
                    <label for="price">Products price:</label>
                    <input id="price" name="price" type="text"  placeholder="Product price" required>
                    <label for="video">Products video:</label>
                    <input type="video" name="video" placeholder="HTML link for video" required>
                    <label for="img">Products image:</label>
                    <input id="img" type="file" name="img" placeholder="Upload image" style="border:none" required>
                        <?php include 'selector.php' ?>
                    <br>
                    <input type="submit" value="Send" style="margin-top:10px;border-radius:0px 0px;background-color: black;color:white;border:2px solid yellow;font-family:'Segoe UI Semibold'" required>
                    <?php $query='SELECT product_code FROM products';
                    include '../config.php';
                    $result=$mysqli->query($query);
                    while($row=$result->fetch_array()){
                        $product_code=rand(9999999999999999, 0);
                        if($product_code==$row['product_code']){
                            $product_code=rand(9999999999999999, 0);
                        }
                    }?>
                    <input type="hidden" name="product_code" value="<?php
                    echo $product_code;
                     ?>">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
