<?php 
include "connection.php";
$id=$_POST['id'];
$delete = "DELETE FROM table04 WHERE id01='$id'";
$query=mysqli_query($conn,$delete);
if ($query) {

    echo $data="deleted sucessfully";

  
     
    } else {
  //  echo "Error deleting record: " . mysqli_error($conn);
  }
  
 //echo $data="deleted sucessfuly";
?>