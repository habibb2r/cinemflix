<?php
session_start();

if(!isset($_SESSION["username"]))
{

   header("location:login.php");


}

?>
<!-- <!DOCTYPE html>
<html>
<head>  
<title></title>
</head>
<body>

<h1> THIS IS ADMIN HOMEPAGE</h1><?php echo $_SESSION["username"]?>

<a href="logout.php">Logout</a>


</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">User Information</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="messages">
            <h2>Messages</h2>
            <ul>
                <li>New message 1</li>
                <li>New message 2</li>
                <li>New message 3</li>
            </ul>
        </section>
        <section id="feedback">
            <h2>Feedback</h2>
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback"></textarea>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section id="user-info">
            <h2>User Information</h2>
            <p>Name: John Doe</p>
            <p>Email: johndoe@example.com</p>
            <p>Account Created: January 1, 2020</p>
        </section>
    </main>
    <footer>
        <p>Copyright © 2021 My Website</p>
    </footer>
</body>
</html>
