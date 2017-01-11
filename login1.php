<?php
/**
 * Created by PhpStorm.
 * User: nishishao
 * Date: 2017/1/11
 * Time: 21:07
 */
include_once "../vendor/autoload.php";
$config = new \Doctrine\DBAL\Configuration();
IF(!$_POST){
    die("非法访问");
}
$pa = [
    'dbname' => 'hello',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'mysqli',
];
$conn = \Doctrine\DBAL\DriverManager::getConnection($pa,$config);
$name = $_POST['username'];
$pass = $_POST['password'];
if (isset($name) && empty($name)){
    if (isset($pass) && !empty($pass)){
            $data = [];
            $data['username'] = $name;
            $data['password'] = md5($pass);


    }

}
