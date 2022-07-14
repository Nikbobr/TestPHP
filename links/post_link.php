<?php
    $id = $_POST ['id'];  
    $link = $_POST['link'];
    $named =$_POST ['link_name'];

    
 include "tags_db.php";
 
  $sql = mysqli_query( $mysqli, "INSERT INTO `links` (`id`, `link`, `link_name`) VALUES ( '$id', '$link', '$named')") ;
  
  
  $redicet = $_SERVER['HTTP_REFERER'];
@header ("Location: $redicet");

  
 
?>
