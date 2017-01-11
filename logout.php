<?php
/**
 * Created by PhpStorm.
 * User: fzc
 * Date: 2017/1/12
 * Time: 1:06
 */
session_start();
$logout = $_POST['logout'];
if ($logout){
    unset($_SESSION['loginInfo']);
    echo "<script>location.href = 'login.php';</script>";
}
