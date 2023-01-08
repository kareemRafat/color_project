<?php 

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$address = $_POST['address']; 
$gender = $_POST['gender']; // 0 , 1 
$priv = $_POST['priv']; // 0 , 1 

include "connect.php";

$insert = "INSERT INTO users 
            (username , password , email , address , gender , priv) 
            VALUES 
            ('$username', '$password' , '$email' , '$address' , '$gender' , '$priv')";

$query = $conn -> query ($insert) ;

if ($query) {

  header("location: ../users.php");

} else {

  echo $conn -> error ;

}