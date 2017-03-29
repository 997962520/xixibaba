<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/3/27
 * Time: 8:59
 */
require_once '../database.php';
session_start();
$my_db=new database();
$user_name = $_SESSION['user_name'];
$user_phone=$_GET['user_phone'];
$user_introduction=$_GET['user_introduction'];
$user_location=$_GET['user_location'];
echo $user_name,$user_introduction,$user_phone,$user_location;
$my_db->database_do("update user set phone=$user_phone where name='$user_name'");
$my_db->database_do("update user set introduction=$user_introduction where name='$user_name'");
$my_db->database_do("update user set location=$user_location where name='$user_name'");
echo"<script type='text/javascript'>alert('信息修改完成！');location='user.php';</script>";