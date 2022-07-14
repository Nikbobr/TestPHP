<?php
    $named = $_POST['name'];
    
 include "tags_db.php";
 
  $sql = mysqli_query( $mysqli, "INSERT INTO `tags_test`(`name_tag`) VALUES ('$named')") ; 



  header('Location:../list-tag.php');
?>
