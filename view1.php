<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
      
      
      <style>
           .modal {
   display: none;  /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}
.close {
  color: red;
  float: right;
  font-size: 28px;
  font-weight: bold;
  line-height: 30px;
  text-align: center;
  border-radius: 50%;
  position: relative;
  
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#sucess{
 display: none;
}
        </style>
        <title>view ajax</title>
    </head>
    <body>
    <div id="sucess" class="alert alert-success">
    <strong>Success!</strong> Data has been updated sucessfully.
</div>
        <table class="table" id="table">
            <thead> 
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>age</th>
            <th>email</th>
            <th>password</th>
            <th>Action</th>
            </thead>
            <tbody  id="submit">
            </tbody>

        </table>
        <div id="modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    
  <div class="close">X</div><h1>edit form</h1>
  
    <form id="myform" action="editajax.php" method="post" >
    <label for="id" >Id</label>
    <input type="text" name="id" id="id" disabled />
    <label for="fname">first name</label>
    <input type="text" name="fname" id="fname" ><br>
    <div id="first-name-err"></div><br>
    <label for="lname">lastname</label>
    <input type="text" name="lname" id="lname" ><br>
    <label for="age">age</label><br>
    <input type="number" name="age" id="age"><br>
    <label for="email">email</label><br>
    <input type="email" name="email" id="email"><br>
<label for="password">password</label>
<input type="password" name="password" id="password" ><br>
<input type="submit" id="submitform" name="submit" value="submit"> 
</form>


  </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                
            $.ajax({
                type:"GET",
                url:"viewajax.php",
                dataType:"html",
                success:function(data){
                $("#submit").html(data);
                }
            });
            $(document).on("click",".deletebtn",function(){
                var studentId= $(this).data("id");
               
                $.ajax({
                type:"POST",
                url:"delete1.php",
                data:{id:studentId},
                success:function(data){
                  //  alert(data);
                //console.log();
               // $("#submit").html(data);
             // $("#submit").html.load;
              //window.location.reload();
         //     location.reload();
            loadlink(); 
         

                }
            });
            });
            $(document).on("click",".editbtn",function(){
                $("#modal").show();
    var update_id = $(this).data("id");
    var update_fname = $(this).data("fname");
    var update_lname = $(this).data("lname");
    var update_age = $(this).data("age");
    var update_email = $(this).data("email");
    var update_password = $(this).data("password");
    
      $('#id').val(update_id);
      $('#fname').val(update_fname);
      $('#lname').val(update_lname);
      $('#age').val(update_age);
      $('#email').val(update_email);
      $('#password').val(update_password);
    });

    $('#submitform').on('click', function(e) {
        e.preventDefault();

    
    var id = $('#id').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var age = $('#age').val();
    var email = $('#email').val();
    var password = $('#password').val();

    
    
        if(id!="" && fname!="" && lname!="" && email!=""){
          $.ajax({
                    type:"POST",
                    url:"editajax.php",
                    data:{
                      id:id,
                    fname:fname,
                  lname:lname,
                age:age,
              email:email,
            password:password},
            cache: false,
        success: function(dataru){
          
          loadlink(); 
                   
        }
                });
        }
      });
              

          
            $(document).on("click","#submitform",function(){
                $("#modal").hide();
                $("#sucess").show();
                window.setTimeout(function () { 
         $("#sucess").hide(); 
      }, 2000); 
                

            });
            
            });
            </script>
            <script>
            var modal=document.getElementById("modal");
            var x=document.getElementsByClassName("close")[0];
            x.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

  }
}

        </script>
       <!--  <script>const form = document.querySelector('form');
const successMessage = document.querySelector('#myform');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    successMessage.classList.add('show');
    setTimeout(() => form.submit(), 2000);
} );</script> -->

        <script>  function loadlink(){
    $('#submit').load('viewajax.php',function () {
         $(this).unwrap();
    });

    setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 1000);

}
/*  var firstName= document.getElementById("fName");
var firstNameValidation=function(){
   firstNameValue=firstName.value.trim(); 
   validFirstName=/^[A-Za-z]+$/;
   firstNameErr=document.getElementById('first-name-err');
   if(firstNameValue=="")
   {
    firstNameErr.innerHTML="First Name is required";
   }else if(!validFirstName.test(firstNameValue)){
     firstNameErr.innerHTML="First Name must be only string without white spaces";
   }else{
     firstNameErr.innerHTML="";
     return true;
    
   } 
}
firstName.oninput=function(){
   
   firstNameValidation();
}
 */
// This will run on page load

</script>
    </body>
</html>