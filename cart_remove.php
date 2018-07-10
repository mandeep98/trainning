<?php
 require 'common.php';
 $_SESSION['id'] = $_GET[$id];
 $_SESSION['users_id'] = $_GET[$users_id];
$select_query = "delete from users_items where users_id = '$users_id' and items_id = '$items_id'"; 
$select_query_result = mysqli_query($con, $select_query);
header('location: cart.php');
?>
