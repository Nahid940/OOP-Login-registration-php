<?php

include_once('Session.php');
Session::init();
Session::checksession();
$name=Session::get('name');
if(isset($name)){
    echo $name;
}

if(isset($_GET['action']) && $_GET['action']=='logout')
{
    Session::Destroy();
   
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="?action=logout">Logout</a>
</body>
</html>