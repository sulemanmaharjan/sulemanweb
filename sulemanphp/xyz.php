<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>hello this is php</p>

<?php

$a=1;
$b=2;
$c=$a+$b;
echo $c;


$name="suleman";
$surname="maharjan";
$fullname=$name+$surname; //yo garna paidaina
echo $fullname;
$fullname=$name.$surname;
echo $fullname;


for ($i=0; $i <10 ; $i++) { 
   echo  "hello"."<br />";

}

?>
    </body>
</html>