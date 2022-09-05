<?php

session_start();


if($_SESSION["uname"]==""){
header("location:index.php");
}

  
  ?>
    
    <!DOCTYPE html>
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
  
        <title>Welcome,<?php echo $_SESSION["uname"] ?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    </head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <h1>Welcome to Our Company</h1></a>
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

      <?php 
       if($_SESSION["uname"]!=""){?>   
        <a class="nav-link" href="login.php"><h2>Welcome, <?php echo $_SESSION['uname'];?><button><a href="logout.php">logout</a></button> </h2></a>
        
           
            
      <?php }else{?>
        <a class="nav-link" href="index.php">login</a>
        <?php } ?>
      
    
      
    </li>
      </div>
  </div>
</nav>

   
    
    

  <p>ABOUT</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sequi quod molestiae provident architecto ad illo, exercitationem fugiat officia eligendi labore accusantium sunt iste in optio eius earum! Unde dolorem nemo perferendis.</p>
  <p>Style</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum numquam eaque veritatis explicabo ullam molestiae fuga quia asperiores beatae sunt impedit temporibus, a quis aperiam consectetur repudiandae pariatur!</p>
  <p>Computer Code</p>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui sapiente est autem quam quas. Animi iure obcaecati cum. Quae est laboriosam quam, tenetur omnis et, voluptatibus, facere quisquam placeat facilis quas dolorum.</p>
  <p>CONTACT US</p>
  <p>lorem12</p>

</body>
</html>
<?php


    

?>
   
    
    
