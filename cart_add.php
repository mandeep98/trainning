<?php
$id = $_GET['id'];
require 'common.php';
$select_query =  "insert into users_items(users_id,items_id,status) values('$users_id','$items_id','Added to cart')";
function mysql_query(){
    header('location: products.php');
}
?>
