<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = '';
$dbname = "cinemaflix";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Information</title>
  <link rel="stylesheet" href="userinter.css">
</head>
<body>
  <table>
    <tr >
      <th class="th"> <h3>First name</h3> </th>
      <th class="th"> <h3>Last Name</h3> </th>
      <th class="th"> <h3>Email</h3> </th>
      <th class="th"> <h3>Phone</h3> </th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["first_name"] . "</td>";
      echo "<td>" . $row["last_name"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["phone"] . "</td>";
      echo "</tr>";
    }
?>
  </table>
</body>
</html>