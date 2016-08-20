<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>验证码</title>
    </head>
    <body>
        <form action="./do_login.php" method="post">
            验证码<input type="text" name="code"><img onclick="this.src='./code.php?'+Math.random()" src="./code.php" alt="">
            <input type="submit">     
        </form>
    </body>
</html>
<?PHP ECHO dirname(__FILE__); ?>
