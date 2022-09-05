<?php
include 'connection.php';
$id=$_POST['id'];
var_dump($_POST);
$select="SELECT * FROM table04 WHERE id01='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($data);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];

//if(isset($_POST['edit'])){
   /*  $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $password=$_POST['password']; */
  /*  $fileName=$_FILES['fileupload']['name'];
    if (isset($fileName)!="") {
      $user=date("YmdHis");
      $tmp=$_FILES["fileupload"]["tmp_name"];
      $extension = explode(".", $_FILES["fileupload"]["name"]);
      
      if($extension[1] !=''){
      $fileupload=$user.".".$extension[1];
      move_uploaded_file($tmp, "upload/" . $user.".".$extension[1]);*/

//   $edit="UPDATE table04 SET firstname01='$fname',lastname01='$lname',age='$age',email01='$email',password='$password', 
// image01 ='$fileupload' WHERE id01='$id '";
  $edit="UPDATE table04 SET firstname01='$fname',lastname01='$lname',age='$age',email01='$email',password='$password' WHERE id01='$id '";
$result=mysqli_query($conn,$edit);
    //  }
 //   }
if($result){
echo"data updated";
//header("location:view1.php");
}else{
    echo("update unsucessfull!!");
}
// }



?>