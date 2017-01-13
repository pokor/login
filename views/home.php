<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
</head>
<body>

<p>欢迎访问本页面</p>
<p>当前登录用户为: <?php echo  $_SESSION['loginInfo']['username'] ?></p>
<p>当前登录用户ID:<?php echo  $_SESSION['loginInfo']['id'] ?></p>
<form action="logout.php" method="post">
    <input type="submit" name="logout" value="退出">
</form>
<script>
    var id = '<?php echo  $_SESSION['loginInfo']['id'] ?>';

    alert(id);
</script>
</body>
</html>