<?php
include 'nav_all.php';
include_once("config.php");
?>

	<div class="col-lg-12 col-md-12" style="margin-top:60px;height:100%;">

<form method="post" action="cart_update.php">
<table width="100%" class="table-bordered table" cellpadding="6" cellspacing="0"><thead><tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th><th>Remove</th></tr></thead>
  <tbody>
 	<?php
	$list_tax = '';
	$grand_total=0;
	if(isset($_SESSION["cart_products"]))
    {
		$total = 0;
		$b = 0;
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {

			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
			$subtotal = ($product_price * $product_qty);
			
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even';
		    echo '<tr class="'.$bg_color.'">';
			echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
			echo '<td>'.$product_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
			$total = ($total + $subtotal);
        }
		$grand_total = $total + $shipping_cost;
		foreach($taxes as $key => $value){
				$tax_amount     = round($total * ($value / 100));
				$tax_item[$key] = $tax_amount;
				$grand_total    = $grand_total + $tax_amount;
		}

		foreach($tax_item as $key => $value){
			$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
		}
		$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
	}
    ?>
    <tr><td colspan="5"><span style="float:right;text-align: right;"><?php echo  $list_tax; ?>Amount Payable : <?php echo $currency.sprintf("%01.2f", $grand_total);?></span></td></tr>
    <tr><td colspan="5">
			<a href="MCmainpage.php" style="background-color:black;color:white;border:1px solid yellow;border-radius:0px;" class="button btn">Add More</a>
			<button class="btn" style="border-radius:0px;border:1px solid yellow;background-color: black;color:white;" type="submit">Update</button>
			<a href="#" class="btn" style="float:right;background-color:#f7ff24;color:black;border:1px solid black;">Continue</a>
		</td>
	</tr>
  </tbody>
</table>


<input type="hidden" name="return_url" value="<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>
</body>
</html>

<?php
include "footer.php";
?>