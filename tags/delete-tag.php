<?php
   require_once "tags_db.php";


    $id = $_GET['id'] ;
 
    
         mysqli_query($mysqli, "DELETE FROM `tags_test` WHERE `tags_test`.`id_tags` = '$id'");

         header('Location:../list-tag.php');
        


