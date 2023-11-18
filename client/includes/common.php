<?php
$con=mysqli_connect("localhost:3306","root","","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
