<?php
session_start();
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Musical Contrast</title>
    <link type="text/css" rel="stylesheet" href="Stagepianos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-2.2.0.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12 top col-xs-12 col-lg-12">
    <nav class="navbar navbar-inverse offset-3 pull right" style="border-radius: 0px!important;">
        <div class="container-fluid" style="background-color: black;">
            <div class="navbar-header" style="padding-right: 30px;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="MCmainpage.php"><img alt="Brand" src="Безымянный.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left: 15px">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="ops">KEYBOARDS&PIANOS</a>
                        <ul class="dropdown-menu" style="border-top:2px solid yellow;">
                            <li><a href="Products.php?&p=1&product_class=Digital_Pianos">Digital Pianos</a></li>
                            <li><a href="Products.php?&p=1&product_class=Stage_Pianos">Stage Pianos</a></li>
                            <li><a href="Products.php?&p=1&product_class=Synthesizers">Synthesizers</a></li>
                            <li><a href="Products.php?&p=1&product_class=Portable_Keyboard">Portable Keyboards</a></li>
                            <li><a href="Products.php?&p=1&product_class=Organs">Organs</a></li>
                            <li><a href="Products.php?&p=1&product_class=Keyboard_Accessories">Keyboard Accessories</a></li>
                            <li><a href="Products.php?&p=1&product_class=Acoustic_Pianos">Acoustic Pianos</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a style="color:white;" id="ops" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GUITARS</a>
                        <ul class="dropdown-menu" style="border-top:2px solid lime;">
                            <li><a href="Products.php?&p=1&product_class=Acoustic_Guitars">Acoustic Guitars</a></li>
                            <li><a href="Products.php?&p=1&product_class=Electronic_Guitars">Electric Guitars</a></li>
                            <li><a href="Products.php?&p=1&product_class=Bass_Guitars">Bass Guitars</a></li>
                            <li><a href="Products.php?&p=1&product_class=Guitar_Amps">Guitar Amps</a></li>
                            <li><a href="Products.php?&p=1&product_class=Guitar_Pedals">Guitar Pedals</a></li>
                            <li><a href="Products.php?&p=1&product_class=Guitar_Accessories">Guitar Accessories</a></li>
                            <li><a href="Products.php?&p=1&product_class=Banjos">Banjos</a></li>
                            <li><a href="Products.php?&p=1&product_class=Mandolins">Mandolins</a></li>
                            <li><a href="Products.php?&p=1&product_class=Ukuleles">Ukuleles</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a style="color:white;" id="ops" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMPUTER MUSIC </a>
                        <ul class="dropdown-menu" style="border-top:2px solid deepskyblue;">
                            <li><a href="Products.php?&p=1&product_class=Audio_Interfaces">Audio Interfaces</a></li>
                            <li><a href="Products.php?&p=1&product_class=Midi_Interfaces">Midi Interfaces</a></li>
                            <li><a href="Products.php?&p=1&product_class=USB_Controllers">USB/MIDI Controlers</a></li>
                            <li><a href="Products.php?&p=1&product_class=Music_Software">Music Software</a></li>
                            <li><a href="Products.php?&p=1&product_class=Computer_Music_Accessories">Computer Music Accessories</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a id="ops" style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DJ GEAR </a>
                        <ul class="dropdown-menu" style="border-top:2px solid purple;">
                            <li><a href="Products.php?&p=1&product_class=Turntables_and_CDJ">Turntables and CDJ</a></li>
                            <li><a href="Products.php?&p=1&product_class=DJ_Mixers">Mixers</a></li>
                            <li><a href="Products.php?&p=1&product_class=DJ_Controllers_and_Interfaces">DJ Controllers and Interfaces</a></li>
                            <li><a href="Products.php?&p=1&product_class=DJ_Headphones">DJ Headphones</a></li>
                            <li><a href="Products.php?&p=1&product_class=DJ_Lighting">DJ Lighting</a></li>
                            <li><a href="Products.php?&p=1&product_class=Effects_Processors">Effects Processors</a></li>
                            <li><a href="Products.php?&p=1&product_class=DJ_Gear_Accessories">Accessories</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a id="ops" style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">STUDIO EQUIPMENT</a>
                        <ul class="dropdown-menu" style="border-top:2px solid orangered;">
                            <li><a href="Products.php?&p=1&product_class=Digital_Recorders">Digital Recorders</a></li>
                            <li><a href="Products.php?&p=1&product_class=Studio_Mixers">Mixers</a></li>
                            <li><a href="Products.php?&p=1&product_class=Samplers">Samplers</a></li>
                            <li><a href="Products.php?&p=1&product_class=Studio_Monitors">Studio Monitors</a></li>
                            <li><a href="Products.php?&p=1&product_class=Studio_Headphones">Headphones</a></li>
                            <li><a href="Products.php?&p=1&product_class=Studio_Microphones">Microphones</a></li>
                            <li><a href="Products.php?&p=1&product_class=Effects_and_Outboard">Effects and Outboard</a></li>
                            <li><a href="Products.php?&p=1&product_class=Studio_Accessories">Accessories</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a id="ops" style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ORCHESTRAL</a>
                        <ul class="dropdown-menu" style="border-top:2px solid red;">
                            <li><a href="Products.php?&p=1&product_class=Brass_Instruments">Brass Instruments</a></li>
                            <li><a href="Products.php?&p=1&product_class=Woodwind_Instruments">Woodwind Instruments</a></li>
                            <li><a href="Products.php?&p=1&product_class=String_Instruments">String Instruments</a></li>
                            <li><a href="Products.php?&p=1&product_class=Music_Stands_and_Cases">Music Stands and Cases</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a style="color:white;" href="search_page.php">SEARCH</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left" style="background-color: inherit;">
                    <li><a href="regiistration.php" style="color:white!important;">REGISTRATION</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-left" style="width: 100px">

                    <li class="dropdown" style="height: 50px;">
                        <?php
                        if(!empty($_SESSION['login']) and !empty($_SESSION['id']))
                        {
                        ?>
                        <a id="ops" style="color:white;width:auto" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login']?><span class="glyphicon glyphicon-shopping-cart" style="margin-left:2px;"></span></a> <ul class="dropdown-menu" style="border-top:2px solid black;min-width: 100px!important;">
                            <li><a href="view_cart.php">Your cart</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </li>
                </ul>
                <?php }
                else{
                    echo '<a id="ops" style="color:white;" href="#" data-toggle="modal" data-target=".bs-example-modal-sm"  role="button" aria-haspopup="true" aria-expanded="false">LOGIN<span class="glyphicon glyphicon-log-in" aria-hidden="true" style="padding-left: 5px"></span></a>
                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                        <div class="modal-dialog modal-sm" style="margin:auto!important;margin-top:100px!important;">
                                            <div class="modal-content" style="width:auto!important;height:auto!important;border-radius:0px 0px!important;background-color: black;border:1px solid white;">
                                        <div class="inputs">
                                        <h4 style="text-align: center;width:100%;color:white;font-family:Segoe UI Light">LOGIN FORM</h4>
                                        <label for="login" id="log_label">Login:</label>
                                        <input type="text" id="login" autocomplete="off" style="width:100%;border:1px solid yellow;" class="form-control"  placeholder="Your login here" name="login" aria-describedby="sizing-addon2">
                                        <label for="password" id="pas_label">Password:</label>
                                        <input type="password" autocomplete="off" id="password" style="width:100%;border:1px solid yellow;" name="password" class="form-control"  placeholder="Your password here" aria-describedby="sizing-addon2">
                                   <button class="btn btn-group-sm" style="width:100%;border-radius: 0px 0px;background-color: black;border:1px solid yellow;color:white;" onclick="return loginCheck()" type="submit">Log in</button></div></div>
                    </div>
  </div>
</div>
                ';}
                ?>
                </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<script>
    function loginCheck() {
        var text = $("#login").val();
        var ps = $("#password").val();
        $.ajax(
            "testreg.php",{
                data:"login="+text+"&password="+ps,
                success:function(data){
                    if(data=='paserror'){
                        $("#password").css("border","3px solid red");
                        $("#password").val("");
                        $("#password").attr("placeholder","Invalid Password!")
                        document.load(data);
                    }
                    if(data=='no user'){
                        $('#login').val('');
                        $('#password').val('');
                        alert("No such user in our database");
                    }
                    if(data=='admin'){
                        window.location.href='admin/admin_page.php';
                    }
                    if(data=='success'){
                        window.location.href='MCmainpage.php';
                    }
                    if(data=='empty'){
                        alert("Fill all fields")
                    }
                }
            }
        )
    }
    function search(){
        var input=$("#search").val();
        $.ajax(
            'search.php',{
                data:"input="+input,
                success:function(data){
                    if(data!=''){
                        $(".search_result").html(data);
                    }
                }
            }
        )
    }
</script>