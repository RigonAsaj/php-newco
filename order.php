<?php

header("Access-Control-Allow-Origin: *");

$serverName="localhost";
$userName="root";
$password="";
$databaseName="react_php";
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo "Success";
}

$order=$_POST['order'];

$query = "INSERT INTO orders (courseName)
VALUES ('$order')";



if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>