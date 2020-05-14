<?php
//접속 계정 정보
$servername = "";
$username = "root"; 
$password = ""; //비밀번호
$dbname = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>