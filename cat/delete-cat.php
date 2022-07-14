<?php
   require_once "tags_db.php";


    $id = $_GET['id'] ;
    
 
    
         mysqli_query($mysqli, "DELETE FROM `categor` WHERE `categor`.`id` = '$id'");

         header('Location:../list-category.php');
        


