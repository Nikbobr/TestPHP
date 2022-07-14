<?php
    $named = $_POST['name'];
    $author = $_POST['author'];
    $type = $_POST['type'];
    $categories = $_POST['categories'];
    $description = $_POST['description'];
    
 include "database.php";
 
  $sql = mysqli_query( $mysqli, "INSERT INTO `db` ( `name`, `author`, `type`, `categories`, `description`)
  VALUES ('$named', '$author', '$type', '$categories', '$description')") ; 



  header('Location:../list-materials.php');
?>
