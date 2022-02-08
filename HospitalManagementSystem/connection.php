<?php
try{
 $db=new PDO("mysql:host=localhost; dbname=group16_database;charest=utf8",'root','');
}catch(Exception $e){
    echo $e->getMessage();
}
?>