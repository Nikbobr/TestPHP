<?php

   
   require_once "database.php";

   $id = $_POST['id'];
   $named = $_POST['name'];
   $author = $_POST['author'];
   $type = $_POST['type'];
   $categories = $_POST['categories'];
   $description = $_POST['description'];




 mysqli_query($mysqli,"UPDATE `db` SET `name` = '$named', `author` = '$author', `type` = '$type',
 `categories` = '$categories', `description` = '$description' WHERE  `db` . `id` = '$id' ");

header('Location:../list-materials.php');


 ?>


