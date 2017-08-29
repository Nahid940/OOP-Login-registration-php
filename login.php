<?php
include_once ('Session.php');
include ('user.php');
Session::init();
Session::checkLoggedin();

$user=new user();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $user->setEmail($email);
    $user->setPassword($password);
    
    if($user->loginUser()){
        Session::init();
        header('Location:index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <style>
         
    </style>
</head>
<body>
<!--   action="loginUser.php-->
   <div class="container">
   <div class="row">
   
   
   <div class="col-md-6 col-sm-4 wrapper">
      <div class="jumbotron">
       
        <h2>
           Manage your residence smartly !!
       </h2>
      <img src="images/buildings.png" alt="" style="width:300px;height:300px">
      </div>   
   </div>
   
   <div class="col-md-6 wrapper">
       <div class="panel panel-login">
           <div class="panel-heading">
               <div class="row">
                   <div class="col-xs-6">
                       <a href="" class="active" id="login-form-link">Sign in</a>
                   </div>
                    <div class="col-xs-6">
                       <a href="" class="active" id="register-form-link">Sign up</a>
                   </div>
               </div>
               <hr/>
           </div>
           
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-12">
                           <?php 
                            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
                                $user->setPassword='';
                              $val= $user->checkUser();
                            }
                        ?> 
                        <form class="form-signin" method="post"  id="login-form" >       
<!--                          <h2 class="form-signin-heading">Sign in</h2>-->
                                  <?php 

                                    if(isset($val)){
                                        echo $val;
                                    }
                                    ?>
                                    <span id="emailcheck"></span>
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address"  autofocus="" />

                                    <span id="passwordcheck"></span>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                                    <button class="btn btn-lg btn-login btn-block button" type="submit" name="login">Login</button>
                                   <br/> 

                        </form>
                        
                        
                        
                        
                        <form id="register-form" action="" method="post" role="form" style="display: none;" class="form-signin">
                            <div class="form-group">
                            <label for="name">Enter your name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  >
                            </div>
                            <div class="form-group">
                               <label for="email">Enter your email:</label>
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                            </div>
                            <div class="form-group">
                                <label for="address" >Enter your address:</label>
                                <input type="text" class="form-control address" id="address" placeholder="Enter address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="mobile" >Enter your mobile:</label>
                                <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
                            </div>
                            
                            
                            <div class="form-group">
                               <table>
                                   <tr>
                                       <td><label for="optradio">Select your gender : </label></td>
                                       <td> <label class="radio-inline">
                                    <input type="radio" name="optradio" value="male"> Male
                                </label>
                                  </td>
                                  <td>
                                <label class="radio-inline">
                                     <input type="radio" name="optradio" value="female">Female
                                </label> 
                                  </td>
                                   </tr>
                               </table>
                            </div>
                            <div class="form-group">
                                <label for="" >Your Date of Birth:</label>
                               <table>
                                   <tr>
                                       <td><select class="form-control" id="date" name="day">
                                    <option >Day</option>
                                    <?php
                                        for($i=1;$i<30;$i++){
                                            echo "<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                                  </td>

                                  <td>
                                    <select class="form-control" id="month" name="month">
                                        <option >Month</option>
                                        <?php
                                        for($i=1;$i<12;$i++){
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                  </td>

                                  <td>
                                    <select class="form-control" id="year" name="year">
                                    <option >Year</option>";
                                    <option value='2000'>2000</option>
                                    <option value='2001'>2001</option>
                                    <option value='2002'>2002</option>
                                    <option value='2003'>2003</option>
                                    <option value='2004'>2004</option>
                                    <option value='2005'>2005</option>
                                    <option value='2006'>2006</option>
                                    <option value='2007'>2007</option>
                                    <option value='2008'>2008</option>
                                    <option value='2009'>2009</option>
                                    <option value='2010'>2010</option>
                                    <option value='2011'>2011</option>
                                    <option value='2012'>2012</option>
                                    <option value='2013'>2013</option>
                                    <option value='2014'>2014</option>
                                    <option value='2015'>2015</option>
                                    <option value='2016'>2016</option>
                                    <option value='2017'>2017</option>
                                </select>

                                  </td>
                                   </tr>
                               </table>

                            </div>
                            
                              <div class="form-group">
                                   <table>
                                       <tr>
                                           <td> <label for="mobile" >Choose your profile pic:</label></td>
                                           <td> <input type="file" class="form-control" id="image"  name="image"></td>
                                       </tr>
                                   </table>
                                </div>
                            
                            
                            <div class="form-group">
                               <label for="password">Enter password</label>
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                               <label for="confirm-password">Confirm password</label>
                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                    </div>
                                </div>
                            </div>
				        </form>
                   </div>
               </div>
           </div>
       </div>
       
   </div>
</div>
</div>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
      $(document).ready(function() {
             $('#login-form').on('click','.button',function(e){
            var email = $('#email').val();
            var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var password = $('#password').val();
   
             if(email=='' || (!mailformat.test(email))){
                document.getElementById("emailcheck").innerHTML="<div class='alert danger'><center>Fill up each field properly!!</center></div>"; 
                $('#email').css('box-shadow','0 0 10px #ff1111');
                $('#email').css('border-color','red');
                 e.preventDefault();
            }
            if(password==''){
                 document.getElementById("emailcheck").innerHTML="<div class='alert danger'><center>Fill up each field properly!!</center></div>"; 
                $('#emailcheck').delay(100).fadeIn(100);
                $('#emailcheck').fadeOut(2000);
                $('#password').css('box-shadow','0 0 10px #ff1111');
                $('#password').css('border-color','red');
                e.preventDefault();
            }
             
         });
          
            $('#email').keyup(function(){
              var $this = $(this);
              var insertedVal = $this.val();
              if (insertedVal !=''){
                    $('#email').css('box-shadow','0 0 10px green');
                 $this.css({"color":"green","border":"1px solid green"});
              }
           })
          
            $('#password').keyup(function(){
              var $this = $(this);
              var insertedVal = $this.val();
              if (insertedVal !=''){
                $('#password').css('box-shadow','0 0 10px green');
                 $this.css({"color":"green","border":"1px solid green"});
              }
           })
      });
</script>


<script>
    
    $(function(){
          $('#login-form-link').click(function (e){
                $('#login-form').delay(100).fadeIn(100);
                $('#register-form').fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            
            
            $('#register-form-link').click(function (e){
                $('#register-form').delay(100).fadeIn(100);
                $('#login-form').fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
      });
</script>

</body>
</html>