<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "eduindia";

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE email='$email' 
        AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Login Successful";
}
else{
    echo "Invalid Email or Password";
}

$conn->close();

?>