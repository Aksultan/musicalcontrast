<?php
 if($results){
    $products_item = '
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding-right:0px;">';
    while($obj = $results->fetch_object())
    {
        $name=$obj->product_name;
        if (strlen($name) > 44) {
            $header = substr($name, 0, 44) ;
        }
        else if (strlen($name) < 29) {
            $header = substr($name, 0, strlen($name)).'<br><br>' ;
        }
        else {
            $header = $name;
        }

        $products_item .= <<<EOT
                        <div class="col-xs-6 col-sm-6 col-md-3 hover">
	<div style="width:auto;display:inline-block;margin-top:5px;margin-left:10px;" class="thumbnail"><a href="product_page.php?&id={$obj->id}&product_class={$obj->product_class}">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3 class="product-name" style="font-size:15px;width:auto;text-align:center">{$header}</h3>
	<div class="product-thumb"><img style="border:1px solid grey;margin-left:12px;" src="img/{$obj->product_img_name}"></div></a><br>
	<div class="product-info">
	<fieldset>
	<span style="margin-left:15px;">Price {$currency}{$obj->price}</span>
	<label>
		<span>Quantity</span>
		<input type="text" size="2"  style="width:20px;height:20px;" maxlength="2" name="product_qty" value="1" />
	</label>

	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div><button type="submit" class="btn add_to_cart btn-primary" style="width:100%" role="button">Add to cart <span class="glyphicon glyphicon-shopping-cart"></span></button></div>
	</div>
	</div>
	</form>
    </div>
    </div>
EOT;
    }
    $products_item .= '</div>';
    echo $products_item;
     if(mysqli_num_rows($results)==0){
         echo '<h1 style="text-align: center;height: 200px;margin-top: 180px;">NOTHING TO SHOW<br>You can add products by using admin page<br>login:Admin password:Admin</h1>';}

 }
?>
