<?php
   require_once "tags_db.php";


    $id = $_GET['id'] ;
  
    
         $del= mysqli_query($mysqli, "DELETE FROM `links` WHERE `links`.`id_link` = '$id'");

        $redicet = $_SERVER['HTTP_REFERER'];
        @header ("Location: $redicet");

         
        


