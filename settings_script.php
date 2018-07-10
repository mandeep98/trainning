<?php
 require 'common.php';
if(!isset($_SESSION['email'])){
            header('location: index.php');
        }
        $new_password = $_POST['New password'];
        $retype_new_password = $_POST['Re-type new password'];
        $a = strlen($new_password);
        $b = strlen($retype_new_password);
        if(!($a==$b)){
            echo 'ERRORRR....!!!! TYPED PASSSWORD IS NOT SAME';
        }
        $select_query = "select PASSWORD from users";
        $old_password = $_POST['Old password'];
        if($select_query == $old_password){
            $update_query = "update users set PASSWORD ='$new_password' where PASSWORD ='$old_password'"; 
        } else {
    header('location: settings.php');
    echo 'ERROR OCCURED';
} 
?>
