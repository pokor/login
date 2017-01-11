<?php
/**
 * Created by PhpStorm.
 * User: fzc
 * Date: 2017/1/12
 * Time: 0:55
 */
session_start();


if (isset($_SESSION['loginInfo'])){
    require_once 'views/home.php';
}else{
    echo "<script>location.href = 'login.php';</script>";
}

