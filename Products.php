<?php
include'nav_all.php';
include_once("config.php");
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
function currentUrl() {
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
    $host     = $_SERVER['HTTP_HOST'];
    $script   = $_SERVER['SCRIPT_NAME'];
    $params   = $_SERVER['QUERY_STRING'];
    $res = split("&brand",$params);
    $params = $res[0];

    return $protocol . '://' . $host . $script . '?' . $params;
}
?>
    <div class="col-lg-2 hidden-xs hidden-sm hidden-md" style="margin-bottom: 15px;height:auto";>
        <?php if(isset($_GET['brand'])){
            echo '
        <ul class="remove_filters">
            <a href="Products.php?&p='.$_GET['p'].'&product_class='.$_GET['product_class'].'"><li>Remove filters <span class="glyphicon-remove glyphicon" style="color:black;margin-left: 5px;"></span></li></a>
        </ul>';
    } ?>
        <div class="brand">
            <ul class="brands_list">
                <li style="border-bottom: 1px solid lightgrey"><b>BRAND</b></li>
                <?php if(!empty($_GET['product_class'])){
                    $product_class=$_GET['product_class'];
                    $querry="SELECT id FROM sub_class WHERE sub_class='$product_class'";
                    $result=$mysqli->query($querry);
                    if($row=$result->fetch_array()){
                    $query="SELECT * FROM brand WHERE sub_class_id=".$row['id'];
                    $_SESSION['sub_class_id']=$row['id'];
                    }
                    $result=$mysqli->query($query);
                    while($row=$result->fetch_array()){
                    echo '<li><a href="'.currentUrl().'&brand='.$row['brand'].'">'.$row['brand'].'</a></li>';}}?>
            </ul>
        </div>
        <div class="price" style="margin-top: 10px">
            <ul style="display: inline;list-style: none;font-family: 'Segoe UI Light'">
                <li style="margin-bottom: 5px;margin-left:10px"><b>PRICE</b></li>
                <li style="border-top:solid lightgray 1px;padding-top: 10px;margin-bottom: 5px;margin-left:10px "><a href="<?php echo currentUrl().'&brand=100-200'?>">100£-200£</a></li>
                <li style="margin: 0px 0px 5px 0px;margin-left:10px "><a href="<?php echo currentUrl().'&brand=200-300'?>">200£-300£</a></li>
                <li style="margin: 0px 0px 5px 0px;margin-left:10px"><a href="<?php echo currentUrl().'&brand=300-400'?>">300£-400£</a></li>
                <li style="margin-left:10px"><a href="<?php echo currentUrl().'&brand=400-h'?>">400£-Higher</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-12 col-xs-12 col-sm-12">
        <div class="filtr">
            <div class="col-md-4 col-lg-8 col-xs-4">
                <nav style="float: left">
                    <ul class="pager">
                        <?php
                        $start=0;
                        $limit=8;
                        if(isset($_GET['p']))
                        {
                            $p=$_GET['p'];
                            $start=($p-1)*$limit;
                        }
                        $query="SELECT * FROM products WHERE product_class='$product_class'";
                        $result=$mysqli->query($query);
                        $rows=mysqli_num_rows($result);
                        $total=ceil($rows/$limit);
                        if($_GET['p']>1)
                        {
                        echo '<li><a href="Products.php?&p='.($_GET['p']-1).'&product_class='.$_GET['product_class'].'" style="color: #0f0f0f;font-family:Segoe UI Light">Previous</a></li>';
                        }
                        if($_GET['p']!=$total or $p=1)
                        {
                        echo '<li><a href="Products.php?&p='.($_GET['p']+1).'&product_class='.$_GET['product_class'].'" style="color: #0f0f0f;font-family:Segoe UI Light">Next</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 col-lg-4 col-xs-8">
                <label for="sort" style="font-size: 16px;margin-top: 25px;font-family:'Segoe UI Light'">Sort by:</label>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Price <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo currentUrl().'&brand=High-Low'?>">High-Low</a></li>
                        <li><a href="<?php echo currentUrl().'&brand=Low-High'?>">Low-High</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ABC<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" style="width:100px!important;">
                        <li><a href="<?php echo currentUrl().'&brand=A-Z'?>">A-Z</a></li>
                        <li><a href="<?php echo currentUrl().'&brand=Z-A'?>">Z-A</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="main" style="width:100%">
        <?php include 'filtr.php'; ?>
    </div>
<?php
include'footer.php'
?>