<?php
session_start();
?>
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_page.css">
    <script src="../js/jquery-2.2.0.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body style="padding:0px;margin:0px;">
<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="height: auto;padding-left: 0px">
    <div class="left_menu">
        <ul class="admin">
            <?php
            $login=$_SESSION['login'];
            include '../config.php';
            $query=$mysqli->query("SELECT * FROM users WHERE login='$login'");
            $myrow=mysqli_fetch_array($query);
            ?>
            <li style="border-bottom: 1px solid grey"><img src="../img/images.png" style="width:40px;"><br>
                <?php echo $myrow['surname'].' '.$myrow['name'] ?><br>
                <a href="../logout.php">Log out</a>
            </li><br><br>
        </ul>
        <ul class="link">
            <a href="products_list.php" style="color:inherit"><li>PRODUCTS LIST</li></a>
            <a href="users.php" style="color:inherit"><li>USERS</li><br></a>
            <a href="adding_page.php" style="color:inherit"><li>NEW PRODUCT</li><br></a>
        </ul>
    </div></div>