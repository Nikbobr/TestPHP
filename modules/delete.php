<?php
   require_once "database.php";


    $id = $_GET['id'] ;
 
    
         mysqli_query($mysqli, "DELETE FROM `db` WHERE `db`.`id` = '$id'");

         header('Location:../list-materials.php');
        


