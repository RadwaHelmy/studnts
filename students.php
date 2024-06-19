<?php
include('./dbconnection.php');
$name = "radwa" ;
$contact_info = "0662435654" ;
$email = "rody@org" ;
$password = "dooody!" ;
$query = "INSERT INTO students(name,contact_info,email,password)
VALUES ('$name' , '$contact_info' , '$email' , '$password') ";
$conn->exec($query);
echo "</br>User data inserted successfully" ;