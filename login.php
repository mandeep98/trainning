<?php
        require 'common.php';
        if(isset($_SESSION['email'])){
            header('location: products.php');
        }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">                    
                    <button type="button" class="navbar-toggle" data-toogle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
                    <a href="index.html" class="navbar-brand">LifestyleStore</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            </div>
            </div>
         </nav>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Login Form</h3></div>
              <div class="panel-body"><p class="text-warning">LogIn to make a purchase.</p></div>
              <form method="post" action="login_submit.php">
                <div class="form-group">
                    E-mail:<input type="text" class="form-control" name="email"><br><br>
                    Password:<input type="text" class="form-control" name="password"><br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="panel-footer">Don't have account?Register</div>
            </div>
        </div>
         <?php
                include 'footer.php';
        ?>
    </body>
</html>
