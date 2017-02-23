<html>
<meta charset="utf-8"/>
<?php
//登录

require_once './database.php';
$email = $_GET['register_email'];
$username = $_GET['register_username'];
$password = $_GET['register_password'];
$my_db=new database();

if($email == "")
{
    echo"<script type='text/javascript'>alert('请输入真实邮箱');location='index.html';</script>";
}
elseif($username == "")
{
    echo"<script type='text/javascript'>alert('请输入用户名');location='index.html';</script>";
}
elseif($password == "")
{
    echo"<script type='text/javascript'>alert('请填写密码');location='index.html';</script>";
}
else
{
    $table='user';
    $values = array('name'=>$username,'password'=>$password, 'email'=>$email,'phone'=>'','location'=>'');
    $my_db->insert_to_db($table,$values);

    $result = $my_db->database_get("select name from user where name='$username'");

    session_start();
    //$_SESSION["role"] = $role;
    $_SESSION["user_name"] = $username;
    echo '<form name="cookie" method="get" action="user/user.php">
        <input type="hidden" id="cname" name="user_name" value="'.$result[0]['name'].'">
        </form>';
    echo "<script type='text/javascript'>alert('注册完成，将进入个人中心');location='user/user.php';</script>";
}

?>
</html>
