<?php
require 'connection.php';

   // var_dump($_POST);
   // exit;
    //if(isset($_POST['submit'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
       // $fileupload=$_POST['fileupload'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $password=$_POST['password'];

      // if (isset($fileName)!="") {
        //  $user=date("YmdHis");
          //$tmp=$_FILES["fileupload"]["tmp_name"];
         // $extension = explode(".", $_FILES["fileupload"]["name"]);
         
        //  if($extension[1] !=''){
         // $fileupload=$user.".".$extension[1];
          //move_uploaded_file($tmp, "upload/" .$fileupload);


    $query="INSERT INTO table04(firstname01,lastname01,age,email01,password	)VALUES('$fname','$lname','$age','$email','$password')";
    $result=mysqli_query($conn,$query);

    echo $dataResult="data inserted successfully";
  //}
//}
  //  }


    ?>