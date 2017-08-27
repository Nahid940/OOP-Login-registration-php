<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>5</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="wrapper">
    <form class="form-signin" method="post" action="loginUser.php">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
          
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
<!--
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
-->
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>   
    </form>
  </div>
</body>
</html>