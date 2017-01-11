<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <title>注册页面</title>
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
</head>
<body>
<div class="mt70 w432 mar_auto re min_h400">
    <form name="form1" id="form1" method="post" action="../regedit.php">
        <p><input type="text" class="pf_ipt_user" placeholder="请输入账号" autocomplete="off" name="username" id="_username" tabindex="1"/></p>
        <p><input type="password" class="pf_ipt_pass pass_bg_1" placeholder="请输入密码" autocomplete="off" maxlength="16" minlength="6" name="password" id="_password" tabindex="2"/></p>
        <p><input type="password" class="pf_ipt_pass pass_bg_1" placeholder="请再输入一次" autocomplete="off" name="pwd_again" id="_password1" tabindex="3"/></p>
        <p>
            <button class="btn_1 w430">注册</button>
        </p>
    </form>
</div>
</body>
</html>