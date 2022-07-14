<?php  
include "tags_db.php";
   $id = $_POST['id'];
   $link = $_POST ['link'];
   $name_link = $_POST['link_name'];
 mysqli_query($mysqli,"UPDATE `links` SET `link` = '$link', `link_name` = '$name_link' WHERE `links`.`id_link` = '$id'");
 
 $redicet = $_SERVER['HTTP_REFERER'];
 @header ("Location: $redicet");


