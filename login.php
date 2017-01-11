<?php
/**
 * Created by PhpStorm.
 * User: nishishao
 * Date: 2017/1/11
 * Time: 21:07
 */


//var_dump($_SERVER);die;

session_start();

$method = $_SERVER['REQUEST_METHOD'];
//get请求
if ($method == 'GET'){

    require_once 'views/login.php';

    //post 请求 接受数据并且处理数据
}elseif ($method == 'POST'){

    //数据验证
    $verify = false;
    $username = null;
    $password = null;

    if (isset($_POST['username'])){
        $username = $_POST['username'];
    }

    if (isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if (is_null($username)){
        exit("<script>alert('用户名不能为空')</script>");
    }

    $usernameLength = strlen($username);

    if($usernameLength < 6 || $usernameLength > 20){
        exit("用户名不能少于6个字符且不能多于20字符");
    }

    if (is_null($password)){
        exit("<script>alert('密码不能为空')</script>");
    }

    $passwordLength = strlen($password);

    if ($passwordLength<6 || $passwordLength > 20){
        exit("密码不能少于6个字符且不能多于20字符");
    }


    include_once "vendor/autoload.php";

    $config = new \Doctrine\DBAL\Configuration();

    $pa = [
        'dbname' => 'hello',
        'user' => 'root',
        'password' => 'root',
        'host' => '192.168.1.105',
        'driver' => 'mysqli',
    ];

    $conn = \Doctrine\DBAL\DriverManager::getConnection($pa,$config);

    $password = md5($password);

    $sql = "select * from user where username='{$username}' AND password = '{$password}'";

//    var_dump($sql);die;

    $result = $conn->fetchAll($sql);

    if (empty($result)){
        exit("<script>alert('用户不存在，请检查用户名或密码是否正确');location.href = 'login.php';</script>");
    }

    $_SESSION['loginInfo'] = [];

    $_SESSION ['loginInfo']['id'] = $result[0]['id'];
    $_SESSION ['loginInfo']['username'] = $result[0]['username'];


    exit("<script>alert('登录成功');location.href = 'home.php';</script>");

}else{
    exit('非法请求');
}




