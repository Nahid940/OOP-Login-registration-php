<?php
include ('user.php');
$user=new user();
if(isset($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['optradio'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
   
    $dob=$year."-".$month."-".$day;
    
    $password=$_POST['password1'];
    
    
    $filename=$_FILES['image']['name'];
    $filesize=$_FILES['image']['size'];
    $filelocation=$_FILES['image']['tmp_name'];
    $div=explode('.',$filename);
    $fileExtension=strtolower(end($div));
    $uniqueName=substr(md5(time()), 0, 10).'.'.$fileExtension;
    $uploaded_image = "uploads/".$uniqueName;
    move_uploaded_file($filelocation,$uploaded_image);


    
    
    $user->setName($name);
    $user->setEmail($email);
    $user->setAddress($address);
    $user->setMobile($mobile);
    $user->setGender($gender);
    $user->setDob($dob);
    $user->setImage($uploaded_image);
    $user->setPassword($password);
    
    
    
    if($user->registerUser()==true){
        echo 1;
    }else{
        echo "error";
    }
}
?>