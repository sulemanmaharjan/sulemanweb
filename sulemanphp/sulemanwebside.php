<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
        #abc {
            background-color: aqua;
            height: 50px;
            text-align: center;
            padding-top: 20px;
            margin-bottom: 6px;
            font-size: 25px;
        }

        #def {
            background-color: aquamarine;
            height: 450px;
            padding: 10px;
            width: 20.2%;
            float: left;
            margin-right: 6px;
            font-size: 25px;
        }

        #ghi {
            float: left;
            height: 450px;
            padding: 9px;
            width: 75.1%;
            background-color: mediumspringgreen;
            margin-bottom: 6px;
            font-size: 25px;
        }

        #jkl {
            background-color: mediumturquoise;            
            text-align: center;
            padding-top: 50px;
            font-size: 25px;
            clear: both;
        }
.red{
    color:red;
}
        @media only screen and (max-width: 900px) {
    #def {
            background-color: aquamarine;           
            padding: 10px;
            width: 100%;           
            margin-right: 6px;
            font-size: 25px;
        }
        #ghi {
            
            padding: 9px;
            width: 100%;
            background-color: mediumspringgreen;
            margin-bottom: 6px;
            font-size: 25px;
        }
        .red
        {
            color:blue;
        }


    }
        
    </style>
</head>

<body>
    <div>

        <div id="abc">SULEMAN MAHARJAN</div>
        <div id="def">contact number:
            9810034303
            9808617661
            <br />
            email id:
            sulemanmaharjan1@
            gmail.com
            <div class="red">
        <?php

$a=18;
if($a>=18)
{
    echo "you can vote";
}
else
{
    echo "you cannot vote";
}
 

?>

</div>
        </div>

        <div id="ghi"><a "href=" ../images"> </a> <img src="img_images.jpg" alt="image" width="170" height="100">
                <img src="img_home.jpg" alt="home" width="170" height="100">
                <img src="img_logo.jpg" alt="logo" width="170" height="100">
                <img src="pineapple.jpg" alt="pineapple" width="170" height="100">
                

        </div>
        <div id="jkl">remember us for :
            <br />
            making websites
            making visiting card
            id card flex printing
            english nepali typing
            <?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?> 


        </div>
       

    </div>


</body>

</html>