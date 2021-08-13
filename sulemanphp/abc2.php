<!DOCTYPE html>
<html>
<body>
<style>
h2 {
  background-color: green;
}

div {
  background-color: lightblue;
}

p {
  color: red;
}
</style>


<?php
echo "<h2>PHP is Fun!</h2>";
echo "<div>Hello world!</div>";
echo "I'm about to learn PHP!<br>";
echo "<p>This ", "string ", "was ", "made ", "with multiple parameters.</p>";
?>


<?php 
$str = addcslashes("Hello World!","W");
echo($str);

$str = addcslashes("Hello suleman!","s");
echo($str);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1><?php echo "hello suleman"; ?></h1>
    <p>Bootstrap is the most popular HTML, CSS...</p>
  </div>
</div>
maxcdn.bootstrapcdn.com
maxcdn.bootstrapcdn.com




</body>
</html>