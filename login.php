<?php
include_once ('Session.php');
include ('user.php');
Session::init();
Session::checkLoggedin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<!--   action="loginUser.php-->
    <div class="wrapper">
    
    <?php 
        $user=new user();
        
        
        
        
    ?>
    
    <form class="form-signin" action="loginUser.php" method="post"  id="loginform">       
      <h2 class="form-signin-heading">Please login</h2>
      <span id="emailcheck"></span>
      <input type="text" class="form-control" name="email" id="email" placeholder="Email Address"  autofocus="" />
    
    <span id="passwordcheck"></span>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>      

      <button class="btn btn-lg btn-primary btn-block button" type="submit" name="login">Login</button>   
    </form>
  </div>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
      
      $(document).ready(function() {
             $('#loginform').on('click','.button',function(e){
            var email = $('#email').val();
            var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var password = $('#password').val();
   
             if(email=='' || (!mailformat.test(email))){
                document.getElementById("emailcheck").innerHTML="<div class='alert alert-danger'><center>Fill up each field properly!!</center></div>"; 
                $('#email').css('box-shadow','0 0 10px red');
                 e.preventDefault();
            }
            if(password==''){
                 document.getElementById("emailcheck").innerHTML="<div class='alert alert-danger'><center>Fill each field properly!!</center></div>"; 
                $('#password').css('box-shadow','0 0 10px red');
                e.preventDefault();
            }
//            

         });
      });
</script>

</body>
</html>