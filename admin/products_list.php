<?php
include 'nav.php';
?>
<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10" style="height: auto">
    <div class="main" style="width:auto;margin:auto;height:auto;">
        <div class="header"><br>
           <a href="admin_page.php" style="color:inherit;" class="musical"> <p class="hidden-xs hidden-sm">MUSICAL CONTRAST<br><span>Admin Mode</span></p></a>
            <p class="hidden-lg hidden-md">MUSICAL CONTRAST<br><span>Admin Mode</span></p>
        </div>
        <div class="event">
            <h2 style="text-align: center">PRODUCTS LIST</h2>
            <table border="1" style="text-align:center">
                <?php
                include '../config.php';
                $query="SELECT * FROM products ORDER BY product_class ASC";
                $result=$mysqli->query($query);
                $products='<tr><td>id</td><td>Image</td><td>Product Name</td><td>Product Class</td><td>Price</td><td>Description</td><td>Save</td><td>Delete</td></tr>';
                while($obj=$result->fetch_object()){
                    $products.=<<<TYPEOTHER
                    <tr>
                    <td>{$obj->id}</td>
                    <form action="edit_product.php" method="post" enctype="multipart/form-data">
                    <td><input type="file" style="width:135px;" name="img" value="{$obj->product_img_name}"><input type="hidden" name="id" value="{$obj->id}"></td>
                    <td><input type="text" value="{$obj->product_name}" name="product_name" style="width:;border:none;height:auto;background-color:inherit;"></td>
                    <td>{$obj->product_class}<input type="hidden" name="product_class" value="{$obj->product_class}"></td>
                    <td><input type="text" name="price" value="{$obj->price}" style="width:80px" ></td>
                    <td><textarea name="product_desc">{$obj->product_desc}</textarea></td>
                    <td><input type="submit" value="Save"></td>
                    </form>
                    <form action="delete_product.php" method="post">
                    <td><input type="hidden" value="{$obj->id}" name="id"><input type="submit" value="Delete"></td>
                    </form>
                    </tr>
TYPEOTHER;
                }
                echo $products;
                ?>
            </table>
        </div>
    </div>
</div>
</body>