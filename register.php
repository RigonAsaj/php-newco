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

$regFname=$_POST["fname"];
$regLname=$_POST["lname"];
$regEmail=$_POST["email"];
$regPass=$_POST["pass"];

$query = "INSERT INTO register (fname, lname, email, pass)
VALUES ('$regFname', '$regLname', '$regEmail', '$regPass')";



if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>