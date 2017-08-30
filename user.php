<?php
include('DB.php');
include_once('Session.php');
//$db=new DB();
class user{
    
    private $email;
    private $password;
    private $message;
    
    public function setEmail($email){
        return $this->email=$email;
    }
    
    public function setPassword($password){
        $this->password=$password;
    }
    
   
    public function loginUser(){
        $sql="select * from userlogin where email=:email and password=:password";
        $stmt=DB::myQuery($sql);
        $stmt->bindValue(':email',$this->email);
        $stmt->bindValue(':password',$this->password);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_OBJ);
        
        if($result){
            Session::init();
            Session::set('login', true);
            Session::set('email', $result->email);
            Session::set('name', $result->name);
            Session::set('address', $result->address);
        }
        
        return $result;
    }
    
        public function checkUser(){
        $sql="select * from userlogin where email=:email and password=:password";
        $stmt=DB::myQuery($sql);
        $stmt->bindValue(':email',$this->email);
        $stmt->bindValue(':password',$this->password);
        $stmt->execute();
        if($stmt->rowcount()==0){
            $msg="<div class='alert colorOrange'><center>Invalid information !!</center></div>";
        return $msg;
    }
    
    }
}
?>