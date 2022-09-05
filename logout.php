<?php 
session_start();
session_unset();
$var=session_destroy();
if($var){
    header("location:home.php");
}
?>