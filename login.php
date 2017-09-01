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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                       <a href="#loginform" class="active" id="login-form-link">Sign in</a>
                   </div>
                    <div class="col-xs-6">
                       <a href="#registerform" class="active" id="register-form-link">Sign up</a>
                   </div>
               </div>
               <hr/>
           </div>
           
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-12">
                           <?php 
                            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
                                //$user->setPassword='';
                              $val= $user->checkUser();
                            }
                        ?> 
                        <form class="form-signin" method="post"  id="loginform">       
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
                                   <div class="info">If you are new please Sign up first!</div>

                        </form>
                        
                   
                         
                        <form id="registerform" action="" method="post" role="form" style="display: none;" class="register-form" enctype="multipart/form-data">
                     
                            <div class="form-group">
                            <span id="nameValid" style="color:red;font-weight:bold"></span>
                            <label for="name" id="label1">Enter your name:</label>
                            <input type="text" class="form-control" id="name1" placeholder="Enter name" name="name" >
                            </div>
                            <div class="form-group">
                               <label for="email" id="label2">Enter your email:</label>
                                <input type="email" name="email" id="email1" tabindex="1" class="form-control" placeholder="Email" value="">
                            </div>
                            <div class="form-group">
                                <label for="address" id="label3">Enter your address:</label>
                                <input type="text" class="form-control address" id="address" placeholder="Enter address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="mobile" id="label4">Enter your mobile:</label>
                                <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
                            </div>
                            
                            
                            <div class="form-group" >
                              <div id="selectRadio">
                               <table>
<!--                                  <span  class="label label-danger"></span>-->
                                  
                                   <tr >
                                       <td><label for="optradio" id="label4">Select your gender : </label></td>
                                    <td> 
                                       <label class="radio-inline">
                                            <input type="radio" name="optradio" id="optradio" value="male"> Male
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radio-inline">
                                             <input type="radio" name="optradio" id="optradio" value="female">Female
                                        </label> 
                                    </td>
                                   </tr>
                                   
                               </table>
                               </div>
                            </div>
                            <div class="form-group">
                                <label for="" id="label5">Your Date of Birth:</label>
                               <table>
                                   <tr>
                                <td>
                                <select class="form-control" id="day" name="day">
                                    <option value=''>Day</option>
                                    <?php
                                        for($i=1;$i<30;$i++){
                                            echo "<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                                  </td>

                                  <td>
                                    <select class="form-control" id="month" name="month">
                                        <option value=''>Month</option>
                                        <?php
                                        for($i=1;$i<12;$i++){
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                  </td>
                                    
                                  <td>
                                    <select class="form-control" id="year" name="year">
                                    <option value=''>Year</option>";
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
                                           <td>
                                           
                                           <label for="image" id="label6">Your image:</label>
                                           <span id="checkImageSize" class="label label-danger"></span> 
                                           <input type="file" class="form-control" id="image"  name="image"></td>
                                       </tr>
                                   </table>
                                </div>
                            
                            
                            <div class="form-group">
                              
                               <label for="password1" id="label7">Enter password</label>
                               
                               <span class="label label-danger" id="wrongpassword"></span>
                               
                                <input type="password" name="password1" id="password1"  class="form-control" placeholder="Password">
                            </div>
                            
                            
                            
                            <div class="form-group">
                               <label for="confirmpassword" id="label8">Confirm password</label>
                               
                               <span id="confirmpasswordWarning"></span>
                               
                                <input type="password" name="confirmpassword" id="confirmpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
<!--                                        <input type="submit"  value="Register Now">-->
                                        <button type="button" name="registersubmit" id="registersubmit" tabindex="4" class="form-control btn btn-register">Register Now</button>
                                         
                                    </div>
<!--                                    <button type="reset"  class="form-control btn btn-register" name="Reset">Reset</button>-->
                                </div>
                            </div>
<!--                            <span id="result"></span>-->
				        </form>
                   </div>
               </div>
           </div>
       </div>
        
        <div id="dialog-message" title="Registration complete" style="display:none">Registration complete !! go to <i
            
         class="fa fa-sign-in" aria-hidden="true"></i> <a href="login.php">Login</a></div>
        
        <div id="dialog-message1" title="Registration failed!!" style="display:none;color:red">Email already exist ! Try another</div>
   </div>
</div>
</div>
 
 
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
      $(document).ready(function() {
          
        var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        $('#login-form').on('click','.button',function(e){
            var email = $('#email').val();
			var password = $('#password').val();
             
             if(email=='' || (!mailformat.test(email))){
                document.getElementById("emailcheck").innerHTML="<div class='alert danger'><center>Fill up each field properly!!</center></div>"; 
                $('#email').css('box-shadow','0 0 10px ##ff0000');
                $('#email').css('border-color','#ff0000');
                 e.preventDefault();
            }
            if(password==''){
                 document.getElementById("emailcheck").innerHTML="<div class='alert danger'><center>Fill up each field properly!!</center></div>"; 
                $('#emailcheck').delay(100).fadeIn(100);
                $('#emailcheck').fadeOut(2000);
                $('#password').css('box-shadow','0 0 10px ##ff0000');
                $('#password').css('border-color','#ff0000');
                e.preventDefault();
            }
             
         });
          
          
            $('#email').keyup(function(){
              var $this = $(this);
              var insertedVal = $this.val();
              if (insertedVal !=''){
                $('#email').css('box-shadow','0 0 10px green');
                 $this.css({"color":"green","border":"1px solid green"});
              }else{
                  $('#email').css('box-shadow','0 0 10px #ff0000');
                 $this.css({"color":"green","border":"1px solid #ff0000"});
              }
           });
          
            $('#password').keyup(function(){
              var $this = $(this);
              var insertedVal = $this.val();
              if (insertedVal !='' ){
                $('#password').css('box-shadow','0 0 10px green');
                 $this.css({"color":"green","border":"1px solid green"});
              }else{
                  $('#password').css('box-shadow','0 0 10px #ff0000');
                 $this.css({"color":"green","border":"1px solid #ff0000"});
              }
           });
          
          
          
          //Check input value for registration form//
          //----------------------------------------------------------------------------------------------------------------------//
             $('input[type=text],#confirmpassword').keyup(function(){
              var $this = $(this);
              var insertedVal = $this.val();
              if (insertedVal !=''){
                $this.css('box-shadow','0 0 10px green');
                $this.css({"color":"green","border":"1px solid green"});
              }else{
                $this.css('box-shadow','0 0 10px #ff0000');
                $this.css({"color":"red","border":"1px solid #ff0000"})
              }
           });
          
          $('#email1').keyup(function(){
              var $this = $(this);
              var insertedVal = $this.val();
              if (insertedVal !='' && (mailformat.test(insertedVal))){
                $this.css('box-shadow','0 0 10px green');
                $this.css({"color":"green","border":"1px solid green"});
              }else{
                $this.css('box-shadow','0 0 10px #ff0000');
                $this.css({"color":"red","border":"1px solid #ff0000"});
              }
           });
          
          
    
          //check password length and if it is empty//------------------------------------------------------------------//
          $('#password1').keyup(function(){
              var $this = $(this);
              var insertedVal = $this.val();
              if (insertedVal !='' && insertedVal.length>=10){
                $this.css('box-shadow','0 0 10px green');
                $this.css({"color":"green","border":"1px solid green"});
                $('#wrongpassword').hide();
              }else{
                $('#wrongpassword').show();
                $('#wrongpassword').text('Password must be 10 characters long !!');
                $this.css('box-shadow','0 0 10px #ff0000');
                $this.css({"color":"#ff0000","border":"1px solid #ff0000"})
              }
           });
          
          //Check if password matches................................................................................
          $('#confirmpassword').keyup(function(){
              var p1 = $('#password1').val();
              var p2 = $('#confirmpassword').val();
        
              if(p2==p1 && p2!=''){
                $('#confirmpasswordWarning').html("<i class='fa fa-check' aria-hidden='true'></i>Password  matches !");
                $('#confirmpasswordWarning').css("color","green");
                $('#confirmpassword').css({"color":"green","box-shadow":'0 0 10px green'});
                $('#password1').css('box-shadow','0 0 10px green');
              }
              else{
                $('#confirmpasswordWarning').html(" <i class='fa fa-times' aria-hidden='true'></i>Password doesn't match !");
                $('#confirmpasswordWarning').css({"color": "#ff0000"});
                $('#confirmpassword').css({"color": "#ff0000","border-color":"#ff0000","box-shadow":"0 0 10px #ff0000"});
              }
           });
          
          
          //Check if all the select options are selected//------------------------------------------------------//
          $("select").on('blur',function(){ 
              if ($('option:selected', this).val() == 0){
                $(this).css('border-color', 'ff0000');
                $(this).css('box-shadow', '0 0 10px #ff0000');
              }
              else if ($(this).val() > 0){
                $(this).css('border-color', 'green');   
                $(this).css('box-shadow', '0 0 10px green');  
              }
        });
          
          //Check image file size and file type.....................................................................
            var myFile = document.getElementById('image');
            myFile.addEventListener('change', function() {
                var file = this.files[0];
                var fileType = file["type"];
                var ValidImageTypes = ["image/gif", "image/jpeg", "image/png"];
                if((this.files[0].size)>50000){
                    $('#checkImageSize').show();
                    $('#checkImageSize').text("50 kb is allowed !");
                    $('#image').css({"border-color":"#ff0000","box-shadow":'0 0 10px #ff0000'});
                    document.getElementById('image').value="";
                }else if($.inArray(fileType, ValidImageTypes) < 0){
                    $('#checkImageSize').show();
                    $('#checkImageSize').text("File format is not supported !");
                     $('#image').css({"border-color":"#ff0000","box-shadow":'0 0 10px #ff0000'});
                    document.getElementById('image').value="";
                }
                else{
                    $('#checkImageSize').hide();
                    $('#image').css({"border-color":"green","box-shadow":'0 0 10px green'});
                }

            });
          
          
          //Check if any filed is empty................................................................................................
            $('#registersubmit').click(function(){ 
                
            var name=$('#name1').val();
            var email = $('#email1').val();
            var address = $('#address').val();
            var mobile = $('#mobile').val();
            var optradio = $('#optradio').val();
                
            var genValue=false;

            var day = $('#day').val();
            var month = $('#month').val();
            var year = $('#year').val();
            var image = $('#image').val();
            var password = $('#password1').val();
            var confirmpassword = $('#confirmpassword').val();
                
            if(name==''){
                $('#name1').css('border-color','#ff0000');
            }
            if (email=='' || (!mailformat.test(email))){
                $('#email1').css('border-color','#ff0000');
            }

            if(address==''){
                $('#address').css('border-color','#ff0000');
            }

            if(mobile==''){
                $('#mobile').css('border-color','#ff0000');
            }
                
            for(var i=0;i<optradio.length;i++){
                if(optradio[i].checked==false){
//                    genValue=true;
                }
                
            }  
            if(!genValue){
                
//                $('#selectRadio').css({"border":"solid 1px red"});
//                $('#genderSelect').html("Select gender");
            }
            
            if(day==''){
                $('#day').css('border-color','#ff0000');
            }else{
                $('#day').css('border-color','#00a534');
            }
                
            if(month==''){
                $('#month').css('border-color','#ff0000');
            }else{
                $('#month').css('border-color','#00a534');
            }
            if(year==''){
                $('#year').css('border-color','#ff0000');
            }else{
                $('#year').css('border-color','#00a534');
            }
            if(image==''){
                $('#image').css('border-color','#ff0000');
            }else{
                 $('#image').css('border-color','green');
            }

            if(password=='' || password.length<10){
                $('#password1').css('border-color','#ff0000');
            }


            if(confirmpassword==''){
                $('#confirmpassword').css('border-color','#ff0000');
            }
     
            if(name!='' && email!='' && (mailformat.test(email)) && address!='' && mobile!='' && optradio!='' && day!='' && month!='' && year!='' && image!='' && password!='' && password==confirmpassword)
                {
                    var formdata = new FormData($('#registerform')[0]);
                    
                    $.ajax({
					type: "POST",
                    data:formdata,
                    url: "userRegistration.php",
                    cache: false,
                    contentType:false,
                    processData:false,

					success: function(responseText){
                        if(responseText==1){
                             $("#dialog-message" ).dialog({
                                  modal: true,
                                  buttons: {
                                    Ok: function() {
                                      $( this ).dialog( "close" );
                                    }
                                  }
                                });
                        }else {
                            $("#email1").css({"color":"red","border-color":"#ff0000","box-shadow":'0 0 10px #ff0000'});
                            $("#dialog-message1" ).dialog({
                                  modal: true,
                                  buttons: {
                                    Ok: function() {
                                      $( this ).dialog( "close" );
                                    }
                                  }
                                });

                            
                        }

					}
                 
				});
                    
                
                }
              
                
        });
      });
   
</script>


<script>
    
    $(function(){
          $('#login-form-link').click(function (e){
                $('#loginform').delay(100).fadeIn(100);
                $('#registerform').fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            
            
            $('#register-form-link').click(function (e){
                $('#registerform').delay(100).fadeIn(100);
                $('#loginform').fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
//        
//        
//           $('#register-submit').click(function (){
//              $('#login-form-link').hide();
//                $(this).show();
////                e.preventDefault();
//            });
//        
        
      });
</script>

</body>
</html>