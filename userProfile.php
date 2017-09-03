<?php
include('user.php');
$user=new user();
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
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
  </head>

  <body>

    <!-- Navigation -->
  

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
     
     
     
     
      <div class="row text-center">
                 <?php
                foreach($user->getUserInformation() as $userData){             
                ?>
        <div class="col-lg-4">

        </div>
        <div class="col-lg-8">      
            <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $userData['name']?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-12 col-lg-12 " align="center">
                    <table class="table table-user-information">
                    <tbody>
                     
                      <tr>
                        <td><img src="<?php echo $userData['image']?>" style="height:200px;width:200px" alt="Image"></td>
                      </tr> 
                        <tr>
                        <td>Email:</td>
                        <td><?php echo $userData['email']?></td>
                      </tr>
                      
                       <tr>
                        <td>Address:</td>
                        <td><?php echo $userData['address']?></td>
                      </tr>
                      
                       <tr>
                        <td>Mobile:</td>
                        <td><?php echo $userData['mobile']?></td>
                      </tr> 
                        <tr>
                        <td>Gender:</td>
                        <td><?php echo $userData['gender']?></td>
                      </tr>
                      
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $userData['dob']?></td>
                        <td>
                        <form action="" method="post">
                         <input type="hidden" value="<?php echo $userData['email']?>" id="userEmail" name="userEmail"/>
                          <input type="button" data-toggle="modal" data-target="#view-modal" value="Update" name="edit"  class="btn btn-primary updateUser" id="updateUser" />
                       
                        </form>
                       </td>
                      </tr>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
                
            </div>
             
         </div>        
    <?php }?> 
              

      </div>
      <!-- /.row -->
      
              <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                 
                  <div class="modal-dialog"> 
                     <div class="modal-content"> 
                        <div class="modal-header"> 
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                           <h4 class="modal-title">
                               <i class="fa fa-pencil" aria-hidden="true"></i> User details
                           </h4> 
                        </div> 

                        <div class="modal-body">                     
                           <div id="modal-loader" style="display: none; text-align: center;">
                           <!-- ajax loader -->
<!--                           <img src="ajax-loader.gif">-->
                           </div>

                           <!-- mysql data will be load here -->                          
                           <div id="dynamic-content"></div>
                        </div> 

                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-primary" onclick="UpdateeventDetails()">Update</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                        </div> 

                    </div> 
                  </div>
            </div>
      
      
      
      

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
    
<!--    <script src="vendor/popper/popper.min.js"></script>-->
<!--    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
  <script src="vendor/jquery/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   
    
    
       <script>
        $(document).ready(function() {
        $(".updateUser").on('click', function(e) {
            e.preventDefault();
            //Get the value after button is clicked
            var userEmail = jQuery(this).prevAll('input[name="userEmail"]').val();
            $('#dynamic-content').html('');
            $('#modal-loader').show();
            $('#modal-loader').hide();
            
             $.ajax({
              url: 'EditUserProfile.php',
              type: 'POST',
              data: {
                  userEmail:userEmail,
              },
              dataType: 'html'
         }).done(function(data){
              console.log(data); 
              $('#dynamic-content').html(''); // blank before load.
              $('#dynamic-content').html(data); // load here
              $('#modal-loader').hide(); // hide loader  
         }).fail(function(){
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });
            
        });
    });
    </script>

  </body>

</html>
