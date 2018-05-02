<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
    <form action="./register.php" method="post">
        <img src="Verify.php"  onclick="this.src='Verify.php?'+new Date().getTime();" width="100" height="100"><br/>
        <input type="text" name="verify" placeholder="请输入图片中的验证码"><br/>
        <input type="submit" value="验证">
    </form>
</body>
</html>