<?php
session_start();

if(isset($_POST['logout']))
{
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSIN['message'] = "Loged out successfuly";
    header('Location: login.php');
    exit(0);

}
?>