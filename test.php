<?php
/**
 * Created by PhpStorm.
 * User: nishishao
 * Date: 2017/1/9
 * Time: 23:22
 */

include_once "../vendor/autoload.php";

$config = new \Doctrine\DBAL\Configuration();

$params = [
    'dbname' => 'hello',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'mysqli',
];

$conn = \Doctrine\DBAL\DriverManager::getConnection($params,$config);


//查询
//
//$sql = "select * from user";
//
//$rs = $conn->query($sql);
//
//var_dump($rs->fetchAll());
//
//


// 插入数据

$data = [];
$data['username'] = '测试2';
$data['password'] = '456789';

$rs = $conn->insert('user',$data);

if ($rs > 0){
    echo '插入成功';
}else{
    echo '插入失败';
}


