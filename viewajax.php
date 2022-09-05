 
<?php 
require 'connection.php';
$query="SELECT * FROM table04";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    $i=1;
    while($data=mysqli_fetch_assoc($result)){
    ?>


    <tr  >

    <td><?php echo $i ?></td>
    <td><?php echo $data["firstname01"] ?></td>
    <td><?php echo $data["lastname01"] ?></td>
    <td><?php echo $data["age"] ?></td>
    <td><?php echo $data["email01"] ?></td>
    <td><?php echo $data["password"] ?></td>
    <td><button class="deletebtn" data-id="<?= $data['id01']; ?>">delete</button><button class="editbtn" 
    data-bs-toggle="modal" 
    data-bs-target="#modal"

data-id="<?=$data["id01"];?>"
data-fname="<?=$data["firstname01"];?>"
data-lname="<?=$data["lastname01"];?>"
data-age="<?=$data["age"];?>"
data-email="<?=$data["email01"];?>"
data-password="<?=$data["password"];?>" 

  ?>edit</button></td>
    </tr>
    
    
    <?php
    $i++;
    }}
    else{
        echo "no records found ";
    }
?>

