<?php

   
include "tags_db.php";

   $id = $_POST['id'];
   $named = $_POST['name_cat'];
   




 mysqli_query($mysqli,"UPDATE `categor` SET `name_cat` = '$named' WHERE `categor`.`id` = '$id'");

header('Location:../list-category.php');



 ?>


