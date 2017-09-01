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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="css/heroic-features.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
  </head>

  <body>

    <!-- Navigation -->
  

    <!-- Page Content -->
    <div class="container">
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
<!--                             <input type="button" data-toggle="modal" data-target="#view-modal" class="btn btn-info editevent" value="Edit">-->
                       <input type="button" data-toggle="modal" data-target="#view-modal" value="Update" name="edit"  class="btn btn-primary editevent" data-id="15" id="editevent" />
                       
                       
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
                               <i class="fa fa-pencil" aria-hidden="true"></i> Event details
                           </h4> 
                        </div> 

                        <div class="modal-body">                     
                           <div id="modal-loader" style="display: none; text-align: center;">
                           <!-- ajax loader -->
                           <img src="ajax-loader.gif">
                           </div>

                           <!-- mysql data will be load here -->                          
<!--                           <div id="dynamic-content"></div>-->
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   
    
    
       <script>
        $(document).ready(function() {
        $(".editevent").on('click', function(e) {
        // Get the record's ID via attribute
            e.preventDefault();
            var id = $(this).attr('data-id');
            $('#dynamic-content').html('');
            $('#modal-loader').show();
            $('#modal-loader').hide();
            alert("ok");
            
//             $.ajax({
//              url: 'editevent.php',
//              type: 'POST',
//              data: {
//                  id:id,
//              },
//              dataType: 'html'
//         }).done(function(data){
//              console.log(data); 
//              $('#dynamic-content').html(''); // blank before load.
//              $('#dynamic-content').html(data); // load here
//              $('#modal-loader').hide(); // hide loader  
//         }).fail(function(){
//          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
//          $('#modal-loader').hide();
//     });
            
        });
    });
    </script>

  </body>

</html>
