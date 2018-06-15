<?php
include'nav.php';
?>
<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10" style="height: auto">
    <div class="main" style="width:auto;margin:auto;height:auto;">
        <div class="header"><br>
            <p class="hidden-xs hidden-sm">MUSICAL CONTRAST<br><span>Admin Mode</span></p>
            <p class="hidden-lg hidden-md">MUSICAL CONTRAST<br><span>Admin Mode</span></p>
        </div>
        <div class="event">
            <h2 style="text-align: center">USERS</h2>
            <table class="users" border="1" style="text-align:center;margin:auto;margin-bottom:10px;">
                <?php
                include '../config.php';
                $query="SELECT * FROM users ORDER BY id ASC";
                $result=$mysqli->query($query);
                $products='<tr><td>Login</td><td>Password</td><td>Name</td><td>Surname</td><td>Country</td><td>Address</td><td>type</td><td>Save_button</td></tr>';
                while($obj=$result->fetch_object()){
                    $products.=<<<TYPEOTHER
                    <tr>
                    <form action="edit_user.php" method="post">
                    <td><input type="text" value="{$obj->login}" name="login">
                    <input type="hidden" name="id" value="{$obj->id}">
                    </td>
                    <td><input type="text" value="{$obj->password}" name="password"></td>
                    <td><input type="text" value="{$obj->name}" name="name"></td>
                    <td><input type="text" value="{$obj->surname}" name="surname"></td>
                    <td><input type="text" value="{$obj->country}" name="country"></td>
                    <td><input type="text" value="{$obj->address}" name="address"></td>
                    <td><input type="text" value="{$obj->type}" name="type"></td>
                    <td><input type="submit" value="Save"></td>
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
