<?php
 require 'common.php';
if(!isset($_SESSION['email'])){
            header('location: index.php');
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>setting</title>
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
                <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.html"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
            </div>
            </div>
        </nav>
        <div class="container">
            <form action="settings_script.php" method="post">
            <div class="form-group">
            <h1>Change Password</h1>
            <input type="text" class="form-control" placeholder="Old Password"><br><br>
            <input type="text" class="form-control" placeholder="New Password"><br><br>
            <input type="text" class="form-control" placeholder="Re-type New Password"><br><br>
            <button type="submit" class="btn btn-primary">Change</button>
            </div>
        </form>
    </div>
        <footer>
                        <div class="container">
                            <center>Copyright  Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</center>
                        </div>
                    </footer>
    </body>
</html>
