 <?php
        require 'common.php';
        if(isset($_SESSION['email'])){
            header('location: products.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>your cart</title>
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
         <div class="container">
            <table class="table table-stripped table-bordered">
                   <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
                </tr>
         <?php
                include 'header.php';
         $user_id = $_SESSION['id']; 
         $select_query = "select items from users_products ";//querey
         $select_query_result = mysqli_query($con,$select_query);
         $abb = mysqli_num_rows($select_query_result);
         if($abb == 0){
             echo 'Add items to cart first!';
         } else {
             while ($row = mysqli_fetch_array($select_query_result)) { 
                 $sum = $price + $row;
                 $id = $items_id ;//append all the id's of items seperated by comma
                  $query = "select name from items i, users_items ui where ui.items_id=i.id";
                 $query_result = mysqli_query($con, $query);
                         ?>   <a href="cart_remove.php?id={$row['id']}" class='remove_item_link'>Remove</a>
             
                      <?php //we used {} inside'' for row to make it count as a variable
                           }
                           ?>
                         <a href="success.php?id={$_GET['$total']}"></a>
          <?php   } 
         
         ?>
        
             
                <tr>
                    <th><br></th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
                <tr>
                <th></th>
                <th>Total</th>
                <th>Rs 0/-</th>
                <th><button class="btn btn-primary">Confirm Order</button></th>
                </tr>
            </table>
        </div>
       <?php
                include 'footer.php';
        ?>
    </body>
</html>
