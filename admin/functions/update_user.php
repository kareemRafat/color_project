<?php 

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address']; 
$gender = $_POST['gender']; 
$priv = $_POST['priv'];

include "connect.php";

// password logic
// if password field  not empty -> update password
if (!empty($_POST['password'])) {
  $password = md5($_POST['password']);
  $updatePass = "UPDATE users SET password = '$password' WHERE id = $id";
  $queryPass = $conn -> query($updatePass);
}



$update = "UPDATE users SET
              username = '$username' ,
              email = '$email' ,
              address = '$address' ,
              gender = '$gender' ,
              priv = '$priv'
            WHERE id = $id 
";

$query = $conn -> query($update);

if ($query) {

  header("location: ../users.php");

} else {

  echo $conn -> error ;

}