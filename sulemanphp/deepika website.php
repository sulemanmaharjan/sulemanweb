<!DOCTYPE html>
<html>
<body>

<?php  
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
} 
?>  

</body>
</html>