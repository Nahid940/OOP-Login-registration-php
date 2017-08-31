<?php
include ('user.php');
$user=new user();
if(isset($_POST['done'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['optradio'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    
    $dob=$year."-".$month."-".$day;
    
    $image=$_POST['image'];
    $password=$_POST['password'];
    
    $user->setName($name);
    $user->setEmail($email);
    $user->setAddress($address);
    $user->setMobile($mobile);
    $user->setGender($gender);
    $user->setDob($dob);
    $user->setImage($image);
    $user->setPassword($password);
    
    
    if($user->registerUser()==true){
        echo 1;
    }else{
        echo "Email already exist !!";
    }
}
?>