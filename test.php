</pre><pre class="php" name="code"><!DOCTYPE html>
    <html><body>
        <form method="POST" action="">           <!-- action内容为空或为自身文件 -->
            用户名:<input type="text" name="name" size="10">
            密码:<input type="text" name="ps" size="10">
            <input type="submit" name="login" value="登录">
        </form>
        <?php
            if (isset($_POST['login'])) {    /* 如果点击了'登录'按钮 */
                $user=$_POST["name"];
                $pwd=$_POST["ps"];
                echo "用户名是：".$user;
                echo "<br />密码是：".$pwd;
            }
        ?>
     
    </body></html>