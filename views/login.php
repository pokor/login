<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <title>登录页面实例展示</title>
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
    </script>
    <style>
        .mar_auto {
            margin-right: auto;
            margin-left: auto;
        }
        .re {
            position: relative;
        }
        .mt70 {
            margin-top: 70px;
        }
        .min_h400 {
            min-height: 400px;
        }
        .w432 {
            width: 432px;
        }
        .btn_1 {
            display: inline-block;

            line-height: 16px;
            padding: 15px 0;
            margin-bottom: 30px;
            border-radius: 3px;
            font-family: Microsoft YaHei,SimHei;
            background: #03a9f4;
            border: 1px solid #0398db;
            color: #fff;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
        }
        .w430 {
            width: 430px;
        }
        .pf_ipt_user, .pf_ipt_pass, .pf_ipt_verify{
            height: 20px;
            line-height: 20px;
            padding: 13px 20px;
            margin-bottom: 30px;
            width: 390px;
            border: 1px solid #d9d9d9;
            border-radius: 3px;
            color: #888;
            font-size: 16px;
            font-family: Microsoft YaHei,SimHei;
        }
        .w230{
            width: 230px;
        }

    </style>
  <script>
        window.onload = function () {
            $(document).ready(function () {
               $("button") ,click(function () {
                   $("form").toggle();
               })
            })
        }
        function foo() {
            if(myform.name.value=="")
            {
                alert("请输入你的姓名");
                myform.name.focus();
                return false;
            }
            if (myform.content.value=="")
            {
                alert("留言内容不能为空");
                myform.content.focus();
                return false;
            }
            if(myform.vcode.value==""){
                alert('验证码不能为空');
                myform.vcode.focus();
                return false;
            }
        }
    </script>
</head>
<body></div>
<div class="mt70 w432 mar_auto re min_h400">
    <form method="post" action="./login.php">
        <p><input type="text" class="pf_ipt_user" placeholder="请输入登录账号" autocomplete="off" name="username" id="_username" tabindex="1"/></p>
        <p><input type="password" class="pf_ipt_pass pass_bg_1" placeholder="请输入密码" autocomplete="off" name="password" id="_password" tabindex="2"/></p>
        <p>
            验证码：<input type="text" name="vcode"><img src="/yanzhengma.php" onClick="this.src='/yanzhengma.php?nocache='+Math.random()" style="cursor:hand">
        </p>
       <p><a href="miss.php">忘记密码?</a></p>
        <input type="submit" value="登录">
        <p><a href="register.php">账号注册</a></p>
    </form>
</div>

</body>
</html>