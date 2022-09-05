<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database01";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn)
{
    echo"";
}
else{
    echo "db not connected";
}
?>