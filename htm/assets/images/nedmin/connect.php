<?php

try{
   $db= new PDO("mysql:host=localhost;dbname=htm","root","");
   
}catch(PDOException $e) {
   print $e->getMessage();

}

?>
