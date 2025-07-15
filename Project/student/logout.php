<?php
session_start();
if(isset($_SESSION['login-user']))
{
    unset($_SESSION['login_user']);
}
header("Location: student-login.php"); // redirect to login page

?>
