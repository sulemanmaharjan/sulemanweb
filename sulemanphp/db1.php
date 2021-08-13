<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php

$con= new mysqli("localhost:3306","root","","collage");

$sql="select * from student";


$result=$con->query($sql);
?>
<table class="table table-dark">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>age</th>
 </tr>
<?php

 while ($row=$result->fetch_assoc())
 {
?>

 <tr>
  <td>  <?php echo $row["studentid"]; ?></td>
  <td>  <?php echo $row["name"]; ?></td>
  <td>  <?php echo $row["email"]; ?></td>
  <td>  <?php echo $row["age"]; ?></td>
 </tr>

<?php
 }

 ?>