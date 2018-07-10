<?php
 require 'common.php';
 if(!isset($_SESSION['email'])){
            header('location: index.php');
        }
 $select_query ="update users_items set status = 'Confirmed' where users_id ='$users_id' and items_id = '$items_id'";
 $select_query_result = mmysqli_query($con,$select_query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>success page</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>Your order is confirmed.Thankyou for shopping with us.<a href="products.html">Click here</a> to purchased any other item.</div>
    </body>
</html>
