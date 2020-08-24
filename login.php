<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$username = $_POST['username'];
$password = $_POST['password'];

$mysqli = new mysqli("127.0.0.1", "test", "12345678", "nighthost");

if(!$mysqli) {
    echo mysqli_connect_error();
    echo "500";    
    exit;
}

$res = $mysqli->query("SELECT password FROM `accounts` WHERE username='".$username."'");

echo "SELECT password FROM `accounts` WHERE username='".$username."'";

$row = $res->fetch_assoc();

if($row['password']==$password && $row['password']!="" && $row['password']!=null) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: /");      
}
else {
    echo "Авторизация не удалась";
}
?>
