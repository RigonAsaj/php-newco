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


$uFname= $_POST["firstname"];
$uLname=$_POST["lastname"];
$uPass=$_POST["password"];




$query = "INSERT INTO user (firstname, lastname, password)
VALUES ('$uFname', '$uLname', '$uPass')";



if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

