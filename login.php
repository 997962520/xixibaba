<html>
<meta charset="utf-8"/>
<?php
//登录
echo"<script type='text/javascript'>alert('请输入用户名');</script>";
require_once './database.php';
$id = $_GET['username'];
$password = $_GET['password'];
$my_db=new database();

if($id == "请输入用户名")
{
    echo"<script type='text/javascript'>alert('请输入用户名');location='index.html';</script>";
}
elseif($password == "password")
{
    echo"<script type='text/javascript'>alert('请填写密码');location='index.html';</script>";
}

$result = $my_db->database_get("select id from user where name='$id'and password='$password'");
if(count($result)!=0) {
    session_start();
    //$_SESSION["role"] = $role;
    $_SESSION["user_id"] = $result[0]['id'];

    echo '<form name="cookie" method="get" action="user/user.php">
                  <input type="hidden" id="cname" name="user_id" value="'.$result[0]['id'].'">
          </form>';

    echo "<script type='text/javascript'>document.cookie.submit();</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('用户名或密码错误');location='index.html';</script>";
    }

?>
</html>
