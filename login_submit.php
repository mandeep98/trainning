<?php
require 'common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = $_POST['password'];
$pass=  md5($password);
$select_query = "select email, id from users where email='$email' and password='$pass'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
  $row = mysqli_num_rows($select_query_result);
    if($row == 0){
        echo "There is no such user in table";
    }else{
      $row = mysqli_fetch_array($select_query_result);
      while ($row = mysql_fetch_array($query)) {
          
      }
    }
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: products.php');
 ?>
