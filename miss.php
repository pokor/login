<?php
/**
 * Created by PhpStorm.
 * User: nishishao
 * Date: 2017/1/13
 * Time: 9:58
 */
session_start();
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'GET'){
    require_once 'views/login.php';
}elseif ($method =='POST'){

}
