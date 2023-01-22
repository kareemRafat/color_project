<?php 


$name = $_POST['name'];
$sale = $_POST['sale'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$cat = $_POST['cat'];

include "../connect.php";


// images //

$imageName = $_FILES['img']['name'] ;
$temp = $_FILES['img']['tmp_name'] ;


/**
 * 1- file uploaded
 * 2- extension
 * 3 - size 
 * 4- change image name -- random name
 * 6-move upload file
 * 7 - insert image name to database
 */

 //1- file uploaded or not 
 if ($_FILES['img']['error'] == 0 ) {

  // 2- extension
  $extensions = ['jpg' , 'jpeg' , 'gif' , 'png'];
  $ext = pathinfo($imageName , PATHINFO_EXTENSION);
  
  if ( in_array($ext , $extensions)) {

    // 3 - size
    if ($_FILES['img']['size'] < 2000000) {

      // 4- change image name -- random name
      $newName = md5(uniqid()) . "." . $ext;

      move_uploaded_file($temp , "../../images/$newName");

    }else {

      echo "file size is too big";
      exit();
    }

  }else {
    echo "wrong file extension - image needed";
    exit();
  }

 } else {
  echo "you must upload an image";
  exit();
 }


// end images //


$insert = "INSERT INTO products 
        (name , price , sale , description , cat_id , img) 
        VALUES 
        ('$name','$price' , '$sale' , '$desc' , '$cat' , '$newName')";

$query = $conn -> query($insert);

if ($query) {

  header("location: ../../products.php");

} else {

  echo $conn -> error ;

}