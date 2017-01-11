<?php
/*if(!$_POST){
    die("非法访问");
}
if(isset($_POST['username']) && !empty($_POST['username'])){//isset

}
header("content-type:text/html;charset=utf-8");

$link = mysqli_connect("localhost","root","root","hello");

if (!$link) {
    die("连接失败: " . mysqli_connect_error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$pwd_again=$_POST['pwd_again'];

if($username == "" || $password == "" || $pwd_again == "")
{
    echo "请确认信息完整性";
}else{
    if($password!=$pwd_again)
    {
        echo"两次输入的密码不一致,请重新输入！"."<br/><br/>";
        echo"<a href='login.html'>重新输入</a>";
        die();
    }
    else
    {
        $sql="insert into user(`username`,`password`) values ('$username','$password')";
        $result=mysqli_query($link,$sql);

        if(!$result)
        {
            echo"注册不成功！"."<br/><br/>";
            echo"<a href='login-in.html'>返回</a>";
            die();
        }
        else
        {
            echo"注册成功!"."<br/><br/>";
            echo"<a href='login.html'>立刻登录</a>";
            die();
        }
    }
}*/
session_start();
include_once "../vendor/autoload.php";
$config = new \Doctrine\DBAL\Configuration();
if(!$_POST){
    die("非法访问");
}

$par = [
    'dbname' => 'hello',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'mysqli',
];

$conn = \Doctrine\DBAL\DriverManager::getConnection($par,$config);

$name = $_POST['username'];
$pass = $_POST['password'];
$pawd = $_POST['pwd_again'];

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['pwd_again']) && !empty($_POST['pwd_again'])){
    if(strlen($name)>6 && strlen($name)<18){
        if(strlen($pass)>= 6 && strlen($pass)<18){
            if($pass != $pawd){
                echo"两次输入的密码不一致,请重新输入！"."<br/><br/>";
                echo"<a href='login.html'>重新输入</a>";
                die();
            }else{
                $data = [];
                $data['username'] = trim($name);
                $data['password'] = md5(trim($pass));
                $res = $conn->insert('user',$data);
                if($res>0){
                    echo"注册成功!"."<br/><br/>";
                    $_SESSION['username'] = $name;
                    $_SESSION['password'] = $pass;
                    echo"<a href='login.html'>立刻登录</a>";
                    die();
                }else{
                    echo"注册不成功！"."<br/><br/>";
                    echo"<a href='login-in.html'>返回</a>";
                    die();
                }
            }
        }else{
            echo "<script>alert('密码不能小于6位或小于18位')</script>";
            echo"<a href='login-in.html'>返回</a>";
        }
    }else{
        echo "<script>alert('用户名不能小于6位数或者大于18位')</script>";
        echo"<a href='login-in.html'>返回</a>";
    }

}else{
    echo "<script>alert(\"请确认信息完整性\")</script>";
    echo"<a href='login-in.html'>返回</a>";

}
