<html>
<meta charset="utf-8"/>
<?php
//登录
require_once './database.php';
$username = $_GET['username'];
$password = $_GET['password'];
$my_db=new database();

if($username == "")
{
    echo"<script type='text/javascript'>alert('请输入用户名');location='index.html';</script>";
}
elseif($password == "")
{
    echo"<script type='text/javascript'>alert('请填写密码');location='index.html';</script>";
}

$result = $my_db->database_get("select name from user where name='$username'and password='$password'");
if(count($result)!=0) //用户名密码输入正确 登陆成功
{
    session_start();
    //$_SESSION["role"] = $role;
    $_SESSION["user_name"] = $result[0]['name'];

    echo '<form name="cookie" method="get" action="user/user.php">
                  <input type="hidden" id="cname" name="user_name" value="'.$result[0]['name'].'">
          </form>';

    echo "<script type='text/javascript'>document.cookie.submit();</script>";
    echo "<script type='text/javascript'>alert('登录完成，将进入个人中心');location='user/user.html';</script>";
}
else//用户名或密码错误
{
    echo "<script type='text/javascript'>alert('用户名或密码错误');location='index.html';</script>";
}

?>
</html>
