<?php 
include 'connection.php';





 ?>
 <html>
    <head>
      <style>
        h1{
          padding-top: 50px;
        }
        
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
        <title>index</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <body>
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FORM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view.php">View</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">abc</a>
        </li>
        
      </ul>
     
    </div>
    <div style="float:right">
  <ul class="navbar-nav">
    <li class="nav-item">    
        <a class="nav-link" href="login.php">login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
      </div>
  </div>
</nav>

<div class="mx-auto" style="width: 200px";>

<h1>Form</h1>
<form id="userForm" style= "margin:auto "action="" 
method="POST" >
<div class="form-group">
  <label for="fname">First Name</label>
  <input type="text" pattern="[A-Za-z]{20}" title="please enter valid name" class="form-control" id="firstname" name="firstname"  placeholder="Enter first name">
  
</div>
<div class="form-group">
  <label for="lname">Last Name</label>
  <input type="text" pattern="[A-Za-z]{20}"  title="please enter valid name"  class="form-control" id="lastname" name ="lastname"  placeholder="Enter Last Name">
</div>

<div class="form-group">
  <label for="age">Age</label>
  <input type="text" class="form-control" id="age" name ="age" placeholder="Enter Age">
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" id="email" name ="email" placeholder="Enter Email">
</div>
<div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="form-control" id="password" name ="password" placeholder="Enter password">
</div>
<!--<div class="form-group">

  <label for="file">Upload Photo:</label>
  <input type="file" name ="fileupload" id="photo_name" class="form-control" >
  
  
</div>-->
<div class="p-2 bg-light border">
<input type="submit" class="btn btn-primary" id="submit"
 name="submit" onsubmit="return validate();" >
<button class="btn btn-dark"><a name="view" href="view1.php">view</a> </button></div>
</form>
</div>
<script>
$(document).ready(function() {
  function resetForm() 
{
	$('#userForm')[0].reset();
}
	
$('#submit').on('click', function(e) {
 // e.preventDefault();
//  $("#submit").attr("disabled", "disabled");
var firstname = $('#firstname').val();
var lastname = $('#lastname').val();
var email = $('#email').val();
var age = $('#age').val();
var password = $('#password').val();
var regName = /^[a-zA-Z]+$/;
var validemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

if((!regName.test(firstname)) || (!regName.test(lastname)) || (!validemail.test(email))){
    alert('Invalid name or email was given.');
}else{
 

if(firstname!="" && email!="" && password!="" ){
	$.ajax({
		url: "insertajax.php",
		type: "POST",
		data: {
			firstname: firstname,
      lastname: lastname,
			email: email,
			age: age,
			password: password				
		},
	//	cache: false,

//  alert(url);
		success: function(dataResult){
		//	alert(dataResult);
			//console.log(dataResult); 			
      resetForm() ;			
			
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
}
});
});
</script>
 <script>

/* function validate(){
  var regName = /^[a-zA-Z]+$/;
var name = document.getElementById('firstname').value;
alert(name);
if(!regName.test(name)){
    alert('Invalid name given.');
}else{
    alert('Valid name given.');
}
}
 */
</script> 

<!-- <script type="text/javascript">
        /*  $('#photo_name').change(function() {
         $('#image_preview3').html("");
         var fileExtension = ['jpeg', 'jpg', 'png', 'pdf',  'docx','jfif'];
         if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
         $("#photo_name").val("");
         alert("Only .jpeg, .jpg, .png, .pdf, docx, xml formats are allowed.");
         return false;
         } else {
         var attach_id = "fileto";
         var size = $('#' + attach_id)[0].files[0].size;
         alert(size);
         }
         }); */
      </script> -->
    </body>
</html>