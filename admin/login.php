<?php

$host="localhost";
$user="root";
$password="";
$db="cinemaflix";
session_start();
$data=mysqli_connect($host,$user,$password,$db);

if ($data==false){


    die("connection error");

}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
     $username=$_POST["username"];
     $password=$_POST["password"];
    $sql="select * from admin where username='".$username."' AND password='".$password."'";
    
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["userprofile"]=="habib")
    {    $_SESSION["username"]=$username;
          header("location:dashboard.php");
          
    }
          elseif($row["userprofile"]=="sifat")
       {
        $_SESSION["username"]=$username;
        header("location:dashboard.php"); 
       }
       elseif($row["userprofile"]=="nusrat")
       {
        $_SESSION["username"]=$username;
        header("location:dashboard.php"); 
       }
       elseif($row["userprofile"]=="sakib")
       {
        $_SESSION["username"]=$username;
        header("location:dashboard.php"); 
       }
    
       else
       {
         echo "username or password incorrect";
    
    }
}






?>




<!DOCTYPE html>
<html>
<head>  
<title></title>
<link rel="stylesheet" href="loginadmin.css">
</head>
<body>
<center>
<div class="adminlog">
    <h1 class="login">Login Form</h1>
    <form class="adminn" action="#" method="POST">
        <div>
            <label>username</label>
            <input type="text" name="username" required>
        </div>

        <div>
            <label>password</label>
            <input type="password" name="password" required>
        </div>

        <div>
        <input type="submit"  value="login">
        </div>

</div>
</center>
</body>
</html>