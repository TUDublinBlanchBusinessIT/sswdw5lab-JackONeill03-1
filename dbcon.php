<?php
$servername = "localhost";
$username = "root";
$password = "Pass4!!";
$dbname = "tennisclub";
$port = 3306;

date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}

$mid = $_POST['memberID']; 
$cid = $_POST['courtID']; 
$bd = $_POST['bookingDate']; 
$st = $_POST['startTime']; 
$et = $_POST['endTime'];

$sql = "INSERT INTO booking (memberid,courtid,bookingDate,starttime,endtime) values ('$mid','$cid','$bd','$st','$et')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>