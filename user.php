<?php
include('DB.php');
include_once('Session.php');
//$db=new DB();
class user{
    
    private $name;
    private $email;
    private $address;
    private $mobile;
    private $gender;
    private $dob;
    private $image;
    private $password;
    
    public function setName($name){
        $this->name=$name;
    }
    
  
    public function setEmail($email){
        $this->email=$email;
    }
    
  
    public function setAddress($address){
        $this->address=$address;
    }
    
    public function setMobile($mobile){
        $this->mobile=$mobile;
    }
    
    public function setGender($gender){
        $this->gender=$gender;
    }
    public function setDob($dob){
        $this->dob=$dob;
    }
    
    public function setImage($image){
        $this->image=$image;
    }
    
    public function setPassword($password){
        $this->password=$password;
    }
    
    
    public function registerUser(){
        
        $sql="select email from userlogin where email=:email";
        $stmt=DB::myQuery($sql);
        $stmt->bindValue(':email',$this->email);
        $stmt->execute();
        if($stmt->rowCount()==1)
        {
            return false;
        }
        else{
        $sql="insert into userlogin(name,email,address,mobile,gender,dob,image,password) values(:name,:email,:address,:mobile,:gender,:dob,:image,:password)";
        $stmt=DB::myQuery($sql);
        $stmt->bindValue(':name',$this->name);
        $stmt->bindValue(':email',$this->email);
        $stmt->bindValue(':address',$this->address);
        $stmt->bindValue(':mobile',$this->mobile);
        $stmt->bindValue(':gender',$this->gender);
        $stmt->bindValue(':dob',$this->dob);
        $stmt->bindValue(':image',$this->image);
        $stmt->bindValue(':password',$this->password);
        $stmt->execute();
        return true;   
        } 
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
    
    
    
    public function getUserInformation(){
        $sql="select * from userlogin where email=:email limit 1";
        $stmt=DB::myQuery($sql);
        $stmt->bindValue(':email',Session::get('email'));
        $stmt->execute();
        return $stmt->fetchAll();
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
    
    
    public function UpdateUser(){
        $sql="select * from userlogin where email=:email";
        $stmt=DB::myQuery($sql);
        $stmt->bindValue(':email',$this->email);
        $stmt->execute();
        $result=$stmt->fetchAll();
        if($result){
            return $result;
        }else{
            return false;
        }

    }
    
}
?>