<html>
<meta charset="utf-8"/>
<?php
//登录

require_once './database.php';
$email = $_GET['register_email'];
$username = $_GET['register_username'];
$password = $_GET['register_password'];
$my_db=new database();
//判断输入是否为空
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
    $result_email=$my_db->database_get("select email from user where email='$email'");//判断用户名和邮箱是否已经注册了
    $result_username=$my_db->database_get("select name from user where name='$username'");
    if(count($result_email)!=0 || count($result_username)!=0)
    {
        echo"<script type='text/javascript'>alert('该用户名和邮箱已被注册');location='index.html';</script>";
    }
    $table='user';
    $values = array('name'=>$username,'password'=>$password, 'email'=>$email,'phone'=>'','status'=>1,'location'=>'','introduction'=>'');
    $my_db->insert_to_db($table,$values);

    $result = $my_db->database_get("select name from user where name='$username'");
    //缓存开始
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
