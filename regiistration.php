<?php
include 'nav.php'
    ?><div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

    <div class="main">
       <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
           <div class="col-lg-3 col-md-4 col-xs-5 col-sm-4" style="height: 100%">
           <div class="registration" style="color:white;">
               <form onsubmit="return validateForm() && emptylogCheck()" action="save_user.php" method="post" name="registration">
                <h3 style="font-family: Ebrima;margin-left: 10px">REGISTRATION</h3>
                <label for="login">Login:</label><br>
                <input oninput="emptylogCheck()" type="text" id="login2" name="login" placeholder="Login" maxlength="16" required>
                <label for="surname">Name:</label>
                <input type="text" placeholder="Name" name="name" required>
                <label for="surname">Surname:</label>
                <input type="text" name="surname" placeholder="Surname" required>
                <label for="password">Password:</label>
                <input type="password" id="password2" name="password" max="16" min="4"  placeholder="Enter password here" required>
                <label for="repass">Repeat password:</label>
                <input type="password" name="repass" id="repass" required maxlength="16" min="4" placeholder="Repeat password">
                <label for="country">Your country:</label>
                <input type="text" name="country" id="country" placeholder="Country">
                <label for="ad">Address:</label>
                <input type="text" id="ad"  name="address" placeholder="Address">
                <input type="submit" style="margin-top: 10px;background-color: black;color:white" name="submit" value="Send">
            </form>
            </div>
            </div>
           <div class="hidden-lg col-md-7 col-xs-7 col-sm-7" style="height: 100%;">
               <div class="info">
                   <ul style="list-style: none;margin: 10px 0px 0px 0px;font-family: Ebrima;font-size: 20px">
                       <li style="color: green;font-size: 30px;margin-bottom: 20px">Example</li>
                       <li style="color: white;margin-bottom: 18px"><span style="color: grey">Aksultan456</span></li>
                       <li style="color: white;margin-bottom: 18px"><span style="color: grey">Aksultan</span></li>
                       <li style="color: white;margin-bottom: 20px"><span style="color: grey">Zhumadil</span></li>
                       <li style="color: white;margin-bottom: 20px"><span style="color: grey">eGsd_45</span></li>
                       <li style="color: white;margin-bottom: 20px"><span style="color: grey">eGsd_45</span></li>
                       <li style="color: white;margin-bottom: 20px"><span style="color: grey">Kazakhstan</span></li>
                       <li style="color: white"><span style="color: grey">Gagarina 32</span></li>
                   </ul>
               </div>
           </div>
           <div class="col-lg-9 hidden-md hidden-sm hidden-xs" style="height: 100%;">
              <div class="info">
                  <ul style="list-style: none;margin: 10px 0px 0px 0px;font-family: Ebrima;font-size: 20px">
                      <li style="color: white;font-size: 30px;margin-bottom: 20px">TIPS</li>
                      <li style="color: white;margin-bottom: 18px">Your login <span style="color: grey">Aksultan456</span></li>
                      <li style="color: white;margin-bottom: 18px">Your real name <span style="color: grey">Aksultan</span></li>
                      <li style="color: white;margin-bottom: 20px">Your real surname <span style="color: grey">Zhumadil</span></li>
                      <li style="color: white;margin-bottom: 20px">Your password must be hard, use symbols and uppercase <span style="color: grey">eGsd_45</span></li>
                      <li style="color: white;margin-bottom: 20px">Repeat your password <span style="color: grey">eGsd_45</span></li>
                      <li style="color: white;margin-bottom: 20px">Where are you from <span style="color: grey">Kazakhstan</span></li>
                      <li style="color: white">Your real address <span style="color: grey">Gagarina 32</span></li>
                  </ul>
              </div>
           </div>
        </div>
    </div>
</div>
</div>
    <script>
        function emptylogCheck() {
            var text = $("#login2").val();
            $.ajax(
                "login_check.php.",{
                    data:"login="+text,
                    success:function(data){
                        if(data==0){
                            $("#login2").css("background","lightgreen");
                        }
                        if(data==1){
                            $("#login2").css("background","indianred");
                        }
                    }
                }
            )
        }
    function validateForm() {
    var password = document.forms["registration"]["password2"].value;
    var repass = document.forms['registration']['repass'].value;
    var password_input=document.getElementById('password2');
    var repass_input=document.getElementById('repass');
        if (password != repass ){
        password_input.style.backgroundColor='indianred';
        repass_input.style.backgroundColor='indianred';
            return false;
    }   else{
            password_input.style.backgroundColor='white';
            repass_input.style.backgroundColor='white';
        }
        if(document.getElementById('login2').style.background=='indianred'){
            return false;
        }
    }
    </script>
<?php
include'footer.php'
?>