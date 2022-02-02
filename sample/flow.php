<?php       
$x =false;
$y = 0; 
try {
     
if($x===false){
    throw new Exception("x is not false");
}} catch (Exception $e){
    echo 'this is not good';
}