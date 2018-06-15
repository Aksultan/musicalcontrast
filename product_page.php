<?php
include 'nav_all.php';
include 'config.php';
if(!empty($_SESSION['login'])){
$login=$_SESSION['login'];}
$id=$_GET['id'];
$query=$mysqli->query("SELECT * FROM products WHERE id=$id");
if($obj=$query->fetch_array()){
    $id=$obj['id'];
    $code=$obj['product_code'];
    $name=$obj['product_name'];
    $desc=$obj['product_desc'];
    $img=$obj['product_img_name'];
    $price=$obj['price'];
    $video=$obj['product_video'];
    $class=$obj['product_class'];
}
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<div class="to_top hidden-lg hidden-md">
    <a href="#top"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>
</div>
<div class="main_product_page">
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 hall">
        <div class="container">
            <h3 class="product_header"><?php echo $name; ?></h3>
            <form action="cart_update.php" method="post">
            <div class="col-lg-3 hidden-xs hidden-sm col-md-3">
            <img src="img/<?php echo $img; ?>" class="img-thumbnail product_img">
                <span>Price: £<?php echo $price  ?></span>
                <span><b>Quantity:</b></span>
                <input type="text" size="2"  style="width:30px;height:20px;margin-bottom: 5px;" maxlength="2" name="product_qty" value="1" />
                <button type="submit" class="btn btn-primary" style="margin-bottom:5px;width:78%">Add to cart   <span class="glyphicon-shopping-cart glyphicon"></span></button>
                 <input type="hidden" name="product_code" value='<?php echo $code;?>' />
                <input type="hidden" name="return_url" value="<?php echo $current_url?>" />
                <input type="hidden" name="type" value="add" />
            </div>
            </form>
            <div class="hidden-lg hidden-md col-xs-12 col-sm-12">
                <form action="cart_update.php" method="post">

                    <img src="img/<?php echo $img; ?>" class="img-thumbnail product_img">
                    <span>Price: £<?php echo $price  ?></span>
                    <span><b>Quantity:</b></span>
                    <input type="text" size="2"  style="width:30px;height:20px;margin-bottom: 5px;" maxlength="2" name="product_qty" value="1" />
                    <button type="submit" class="btn btn-primary" style="margin-bottom:5px;width:41%">Add to cart   <span class="glyphicon-shopping-cart glyphicon"></span></button>
                    <input type="hidden" name="product_code" value='<?php echo $code;?>' />
                    <input type="hidden" name="return_url" value="<?php echo $current_url?>" />
                    <input type="hidden" name="type" value="add" /></form>
            </div>
                <div class="product_info">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#highlights" style="border:none!important;" aria-controls="home" role="tab" data-toggle="tab">Highlights</a></li>
                        <li role="presentation"><a href="#delivery"  style="border:none;" aria-controls="profile" role="tab" data-toggle="tab">Delivery&Returns</a></li>
                        <li role="presentation"><a href="#video" style="border:none;" aria-controls="messages" role="tab" data-toggle="tab">Video</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="highlights">
                            <ul>
                            <li style="color:red">Free headphones and bench with this piano</li>
                            <li>88 graded hammer standard keyboard delivers an acoustic piano playing experience</li>
                            <li>Synthetic ivory keytops provide an authentic touch</li>
                            <li>Pure CF sound engine delivers incredibly expressive instruments</li>
                            <li>Massive 128 note polyphony for expressive playing with no drop-outs</li>
                            <li>2 track recording to capture your performances</li>
                            <li>Dual and layered playing creates expressive and rich timbres</li>
                            <li>Free 2-Year Extended Warranty</li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="delivery">
                            <ul>
                            <li>Delivery to UK mainland addresses* is FREE on orders over £75 and up to 30kg. <br>(As a guide, a standard electric guitar weighs approx. 3-5kg).</li>
                            <li>Delivery on orders below £75 are charged at £4.45!</li>
                            <li>Delivery to Northern Ireland, the Scottish Highlands & Islands, Isle of Man, Isle of Wight,<br> Channel Islands and the Republic of Ireland.</li>
                            <li>is weight dependant and will be indicated at the checkout</li>
                            <li>Delivery above 30kg to ANY location will vary according to weight and will be indicated at the checkout</li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="video"><?php echo $video; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12" style="height:auto">
                <h3 class="desc_header" style="background-color:black;color:white;border-bottom:4px solid yellow;font-family:'Segoe UI Light'">DESCRIPTION</h3>
                <p class="description" style="padding: 5px;"><?php echo $desc; ?></p>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12" style="height: auto;">
                <h3 align="center" style="background-color: black;color:white;font-family: 'Segoe UI Light';border-bottom:4px solid yellow">COMMENTS</h3>
                <?php
                if(!empty($_SESSION['login']))
                {$quer="SELECT * FROM comments WHERE `user`='$login' AND `product_id`='$id'";
                $rest=$mysqli->query($quer);
                $date=date("Y/m/d");
                if(mysqli_num_rows($rest)==0){
                echo '<div class="comment_form">
                <form action="add_comment.php" method="post">
                    <h4 class="comment_header">Let us know you thoughts:</h4>
                    <textarea name="comment"></textarea><br>
                    <input type="hidden" name="return_url" value="'.$current_url.'">
                    <input type="hidden" name="login" value="'.$login.'">
                    <input type="hidden" name="product_id" value="'.$id.'">
                    <input type="hidden" name="add_date" value="'.$date.'">
                    <input type="submit" class="button"  value="Add my thoughts!">
                </form>
                </div>';}}
                ?>
                <?php
                $query="SELECT * FROM comments WHERE product_id=$id ORDER BY id DESC";
                $result=$mysqli->query($query);
                $comments ="<div class='comments'>";
                while($item=$result->fetch_array()){
                    $user=$item['user'];
                    $comment=$item['comment'];
                    $comment_id=$item['id'];
                    $add_date=$item['add_date'];
                    if(!empty($_SESSION['login'])){
                        if($login==$user){
                        $comments .= <<<EOT
                    <form action="delete_comment.php" method="post">
                    <div class="comment">
                    <input type="hidden" value="$user" name="user">
                    <input type="hidden" value="$comment_id" name="comment_id">
                    <h5>$user <span style="color:grey;font-size:12px;">$add_date</span>
                    <span style="float:right;color:black"><button type="submit" style="background-color:inherit;border:none;">
                    <span class="glyphicon glyphicon-remove" style="color:red;"></span></button></span></h5>
                    <p>$comment</p>
                    </div>
                    </form>
EOT;
                    }
                    else{
                        $comments .= <<<EOT
                    <div class="comment">
                    <h5>$user <span style="color:grey;font-size:12px;">$add_date</span></h5>
                    <p>$comment</p>
                    </div>
EOT;
                    }
                    }

                else {
                        $comments .= <<<EOT
                    <div class="comment">
                    <h5>$user <span style="color:grey;font-size:12px;">$add_date</span></h5>
                    <p>$comment</p>
                    </div>
EOT;
                    }
                }$comments .="</div>";
                echo $comments;
                ?>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12" style="height:auto;">
                <h3 class="also" style="background-color:black;color:white;border-bottom:4px solid yellow">LOOK ALSO</h3>
                <?php
                $product_class=$_GET['product_class'];
                $query="SELECT * FROM products WHERE product_class='$product_class'";
                $result=$mysqli->query($query);
                $also="<div class='also_product'>";
                $count=0;
                while($item=$result->fetch_array()){
                        if($count!=8) {
                            $count++;
                            $id = $item['id'];
                            $name = $item['product_name'];
                            $img = $item['product_img_name'];
                            $len = 33;
                            if (strlen($name) > $len) {
                                $header = substr($name, 0, $len) . '...';
                            } else {
                                $header = $name;
                            }
                            $also .= <<<TYPEOTHER

                      <div class="col-xs-6 col-md-3 col-lg-6 col-md-6">
                        <a href="product_page.php?&id=$id&product_class=$product_class" class="thumbnail">
                            <img src="img/$img" alt="...">
                            $header
                        </a>
                      </div>

TYPEOTHER;
                        }
                }$also .="</div>";
                echo $also;
                ?>

            </div>
        </div>
    </div>
</div>
<?php
include'footer.php';
?>
