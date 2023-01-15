<?php 


$name = $_POST['name'];
$sale = $_POST['sale'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$cat = $_POST['cat'];

include "../connect.php";

$insert = "INSERT INTO products 
        (name , price , sale , description , cat_id) 
        VALUES 
        ('$name','$price' , '$sale' , '$desc' , '$cat')";

$query = $conn -> query($insert);

if ($query) {

  header("location: ../../products.php");

} else {

  echo $conn -> error ;

}