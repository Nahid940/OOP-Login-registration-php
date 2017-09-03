<?php
include('user.php');
    $user=new user();
    
    if(isset($_POST['userEmail'])){
        $email=$_POST['userEmail'];
        $user->setEmail($email);
        
        if($user->UpdateUser()){
            foreach($user->UpdateUser() as $userData)
            
            ?>
            
            <div class="table-responsive">
            <form action="" method="post">
               
             <table class="table table-striped">
             <tr>
                 <td> Name: </td>
                 <td><input type="text" value="<?php echo $userData['name']?>" id="name" name="name" class="form-control"/></td>
             </tr>
             <tr>
                 <td> Address: </td>
                 <td><input type="text" value="<?php echo $userData['address']?>" id="address" name="address" class="form-control"/></td>
             </tr>
             
             <tr>
                 <td> Mobile: </td>
                 <td><input type="text" value="<?php echo $userData['mobile']?>" id="mobile" name="mobile" class="form-control"/></td>
             </tr>
             
             <tr>
                <td> Gender: </td>
                <td><input type="text" value="<?php echo $userData['mobile']?>" id="name" name="name" class="form-control"/></td>
             </tr>
             <tr>
                 <td>Image</td>
             </tr>
             </table>
         </form>
             </div>
        
        <?php } ?>
   
<?php  } ?>