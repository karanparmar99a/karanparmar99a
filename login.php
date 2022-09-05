<?php 
include('connection.php');  
session_start();
 

if(isset($_POST['submit'])){
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        $email = stripcslashes($email);  
        
        $password = stripcslashes($password);  
       
        $email = mysqli_real_escape_string($conn, $email);  
        
        $password = mysqli_real_escape_string($conn, $password);  
       
        
     
        $sql = "SELECT * FROM table04 WHERE  email01 = '$email' and password = '$password'";  
        
        $result = mysqli_query($conn, $sql);  

        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            $_SESSION['uname']=$row['firstname01'];
            header("location:home.php");
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
        
}        
?>  
<html>  
<head>  
    <title>PHP login system</title>  
 
      <style>
         body{   
    background: #eee;  
}  
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
}  
      </style> 
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Email: </label>  
                <input type = "email" value="karan124@gamil.com" id ="email" name  = "email" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" value="1234" id ="pass" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "submit" name="submit" />  
            </p>  
            <p>
                <button><a href="index.php">home</a></button>
            </p>
        </form>  
    </div>    
    <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Username is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>