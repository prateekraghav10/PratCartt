<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['reg_p'])) {
// receive all input values from the form
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$price = mysqli_real_escape_string($conn,$_POST['price']);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO products (name, price)VALUES ('$pname', '$price')";
if ($conn->query($sql) === TRUE) {
echo "alert('New record created successfully')";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>