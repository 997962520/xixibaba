<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/3/7
 * Time: 13:18
 */
require_once '../database.php';
session_start();
$user_name = $_SESSION['user_name'];
$old_password = $_GET['old_password'];
$new_password = $_GET['new_password'];
$confirm_new_password = $_GET['confirm_new_password'];
$my_db=new database();

if($new_password!=$confirm_new_password)//两次输入密码不一致，请重新输入
{
    echo"<script type='text/javascript'>alert('两次输入密码不一致，请重新输入！');location='user_security.html';</script>";
}
else//两次输入密码一致，判断旧密码输入是否正确
{
    $real_password=$my_db->database_get("select password from user where name='$user_name'");
    if($old_password==$real_password[0]['password'])//旧密码输入正确
    {
        $my_db->database_do("update user set password=$new_password where name='$user_name'");
        echo "<script type='text/javascript'>alert('密码修改成功，请牢记您的密码！');location='user_security.html';</script>";
    }
    else//旧密码输入错误
    {
        echo"<script type='text/javascript'>alert('旧密码输入错误！');location='user_security.html';</script>";
    }
}





