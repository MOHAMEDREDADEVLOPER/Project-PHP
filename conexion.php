<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=market;port=3306","root","");
}catch(Exception $e){
    echo "Error : ".$e->getMessage();
}
?>