<?php
include_once('Session.php');
Session::init();
Session::checksession();

//if(isset($name)){
    $name=Session::get('name');
//}

if(isset($_GET['action']) && $_GET['action']=='logout')
{
    Session::Destroy();  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="css/heroic-features.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
<!--
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="userProfile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout <?php echo $name?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
-->

    <!-- Page Content -->
    <div class="container-fluid">
       <nav class="navbar navbar-default">
<!--      <div class="container">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li> <a class="nav-link" href="userProfile.php"><i class="fa fa-fw fa-user"></i> Profile</a></li>
            <li><a class="nav-link" href="?action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout <?php echo $name?></a></li>
           
          </ul>
         
        </div><!-- /.navbar-collapse -->
<!--      </div>-->
      <!-- /.container -->
    </nav>
      
      
      

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
      
        <h1 class="display-3">A Warm Welcome! <?php  echo $name;?>
        </h1>
      
      
<!--
        <p class="lead"></p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
-->
      </header>

      <!-- Page Features -->
      <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <div class="card-footer">
              <a href="manager.php" class="btn btn-primary">Manage your managers</a>
            </div>
          </div>
        </div>

<!--
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
-->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
<!--    <script src="vendor/popper/popper.min.js"></script>-->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
