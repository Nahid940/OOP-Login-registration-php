<?php
include ('user.php');
include_once ('Session.php');
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

    }else{ 
        header('Location:login.php');
    }
    
}
?>