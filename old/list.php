<!-- bootstrap css cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- bootstrap js cdn -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
$con =new mysqli("localhost","root","","evan",3308); //3306

$sql="select * from student";
$result=$con->query($sql);

?>
<div class="container jumbotron">



<table class="table table-dark m-0">
<tr><th>ID</th><th>NAME</th><th>ADDRESS</th></tr>

<?php

while($row=$result->fetch_assoc())
{
    ?>
<tr>
    <td><?php echo $row['studentid'];?></td>
    <td><?php echo $row['studentname'];?></td>
    <td><?php echo $row['address'];;?></td>
</tr>
    <?php
   
}
 

?>
</table>
<button class="btn btn-danger m-2"><a href="add.html" class="text-light"> Add New</a></button>
</div>