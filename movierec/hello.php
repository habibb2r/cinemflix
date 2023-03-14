<?php
$moviename = filter_input(INPUT_POST, 'moviename');
$email = filter_input(INPUT_POST, 'email');
if (!empty($moviename)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cinemaflix";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO movie_request (email, movie_name)
values ('$email','$moviename')";
if ($conn->query($sql)){
    header("location:../homepage/index.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "moviename should not be empty";
die();
}
?>