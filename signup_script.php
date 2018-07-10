<?php
require 'common.php';
$name = $_POST['name'];
$email = $_POST['email'];
 $password = $_POST['password'];
 $contact = $_POST['contact'];
 $city = $_POST['city'];
 $address = $_POST['address'];
$select_query = "select id from users where email='$email'";
if (mysqli_num_rows($select_query)> 0) {
    echo "ERRORR.....!!!!! Email id already exists";
}
 else {
    $user_registration_query = "insert into users(name, email, password, contact, city, address) values('$name','$email','$password','$contact','$city', '$address')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $_SESSION['id'] = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    header('location: products.php');
 }
?>
