<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo " :) ";
}else{
    echo "not connected";
}

mysqli_select_db($con, 'cinemaflix');

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// // $pwd = $_POST['pwd'];
// // $cpwd = $_POST['cpwd'];
// $email = $_POST['email'];
// $phn =$_POST['phn'];

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $email = $_POST['email'];
    $phn =$_POST['phn'];
    if($pwd != $cpwd) {
        echo '<h1>Passwords do not match. :( </h1>';
    } else {
        $query = " insert into users (first_name, last_name,pass,cpass,email, phone)
                   values ('$fname', '$lname','$pwd', '$cpwd', '$email', '$phn')";
        
        mysqli_query($con,$query);
        header('location: ../index.html');
    }
}

// $query = " insert into users (first_name, last_name,pass,cpass,email, phone)
// values ('$fname', '$lname','$pwd', '$cpwd', '$email', '$phn')";

// mysqli_query($con,$query);
// header('location: ../index.html');

?>