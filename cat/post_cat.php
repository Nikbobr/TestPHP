<?php
    $named = $_POST['name'];
    
 include "tags_db.php";
 
  $sql = mysqli_query( $mysqli, "INSERT INTO `categor`(`name_cat`) VALUES ('$named')") ; 



  header('Location:../list-category.php');
?>
