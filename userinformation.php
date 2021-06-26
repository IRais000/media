<?php
$connection = mysqli_connect('localhost', 'root');
mysqli_select_db($connection,"espace-membre");

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO 'utilisateurs' ('pseudo','email', 'password') VALUES ('$pseudo','$email','$password)";
mysqli_query($connection,$query);
?>



