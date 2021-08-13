<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
    <style>
        h1{
            margin-bottom:10px;
            color:gray;
            font-family: "Times New Roman";
        }
        form{
            width:400px;
        }
        </style>
</head>
<body>
    <div class="container jumbotron card ">
        <h1>Login to  our website</h1>
    <form action="loginprocess.php" >
        <div class="form-group">
            
            <input placeholder="Please enter your username" name="username" type="text" class="form-control" id="email">
            <br />
            <input placeholder="Please enter your password" name="password" type="password" class="form-control" id="email">
          </div>
         <input type="submit" value="Login" class="btn btn-success m-3">
          
    </form>
    </div>
</body>
