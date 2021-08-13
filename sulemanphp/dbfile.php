<?php

$con= new mysqli("localhost:3306","root","","collage");

$sql="select * from student";


$result=$con->query($sql);


 while ($row=$result->fetch_assoc())
 {
     echo $row["name"]."<br>";
 }

 ?>