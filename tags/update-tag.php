<?php  
include "tags_db.php";
   $id = $_POST['id'];
   $named = $_POST['name_tag'];
 mysqli_query($mysqli,"UPDATE `tags_test` SET `name_tag` = '$named' WHERE `tags_test`.`id_tags` = '$id'");
header('Location:../list-tag.php');
 ?>


