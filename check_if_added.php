<?php
function check_if_added_to_cart($items_id){
    $_SESSION[users_id] = $users_id;
    require 'common.php';
    $select_query = "select * from users_items where items_id='$items_id' and users_id='$users_id' and status='Added to cart'";
    if(mysqli_num_rows($select_query) >= 1){
         return 1;
}  else {
    return 0;
}
}
?>
