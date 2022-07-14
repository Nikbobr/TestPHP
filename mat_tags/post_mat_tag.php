<?php
    $id = $_POST ['id'];  
    $named = $_POST['id_tags'];
    
 include "tags_db.php";
 
  $sql = mysqli_query( $mysqli, "INSERT INTO `post_tags` (`id`, `id_tags`) VALUES ( '$id', '$named')") ;
  
  
  $redicet = $_SERVER['HTTP_REFERER'];
  @header ("Location: $redicet");

  
 
?>
