<?php
session_start();
include "../functions.php";
$_SESSION['error'] = null;

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone not ethical trying to access our code directly!');

$display_name = isset($_POST['display_name']) ? $_POST['display_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';

if (!empty($email) && !empty(password)&& !empty(&display_name)) {
  $valid_var=null;
  $new_user_id= creat_user($email,$passward,$display_name)
  $new_user = get_user($new_user_id);
   else
{  $error_msg="please fillout information";
    $error=true;
}
if ($error) {
    $_SESSION['error'] = $error_msg;
    tik_redirect("../user_registration.php") 

}    else { $_SESSION['user'] = array(
    'display_name'=>$new_user->display_name;
    'is_admin'=>$new_user->is_admin
);
    tik_redirect(" ../home.php");
}
