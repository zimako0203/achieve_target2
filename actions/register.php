<?php
 include_once "../classes/user.php";

# works like isset but using the OOP method
# all of these are referencing the input fields in views/register.php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address=$_POST['address'];
$contact_number=$_POST['contact_number'];
$username = $_POST['username'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$user = new User;

$user->createUser($first_name,$last_name,$address,$contact_number,$username,$password);
?>