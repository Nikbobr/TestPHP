<?php
   require_once "tags_db.php";


    $id = $_GET['id'] ;
  
    
         $del= mysqli_query($mysqli, "DELETE FROM `post_tags` WHERE `post_tags`.`id_post` = '$id'");

        $redicet = $_SERVER['HTTP_REFERER'];
        @header ("Location: $redicet");

         
        


