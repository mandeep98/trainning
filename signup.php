<?php
        require 'common.php';
        if(isset($_SESSION['email'])){
            header('location: products.php');
        }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
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
         <?php
                include 'header.php';
        ?>
        <div class="container">
            <h1>SignUp</h1>
            <div class="row">
                <form method="post" action="signup_script.php">
                    Name:<input type="text" class="form-control" name="name"><br><br>
                      E-mail:<input type="text" class="form-control" name="email"><br><br>
                    Password:<input type="text" class="form-control" name="password"><br><br>
                     Contact:<input type="text" class="form-control" name="contact"><br><br>
                     City:<input type="text" class="form-control" name="city"><br><br>
                     Address:<input type="text" class="form-control" name="address"><br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <?php
                include 'footer.php';
        ?>
    </body>
</html>
