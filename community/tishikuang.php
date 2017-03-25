<?php
session_start();
require_once '../database.php';
$my_db=new database();
if(!isset($_SESSION['user_name']))
{
    echo "<script language='javascript'>
           alert('请先登录');
           window.location.replace(http://localhost/xixibaba/index.html);
           </script>";
}
else
{
    header("location:http://localhost/xixibaba/community/communityCenter.php");
}
?>