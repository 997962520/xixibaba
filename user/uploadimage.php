<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/4/13
 * Time: 9:17
 */
session_start();
header("Content-Type:text/html;charset=utf-8");
// 附件的存储位置、附件的名字
$path = "./user_image/";

$username = $_SESSION['user_name'];
// 拼接成该文件在服务器上的名称
$server_name = $path . $username . ".jpg";


if ($_FILES['photo']['error'] > 0) {
    die("出错了！" . $_FILES['photo']['error']);
}
if (move_uploaded_file($_FILES['photo']['tmp_name'], $server_name)) {
    //echo "<BR>"."Upload Success!";
    echo "<script type='text/javascript'>alert('上传头像成功');location='../user/user.php';</script>";
} else {
    //echo "<BR>"."Upload Failed!".$_FILES['photo']['error'];
    echo "<script type='text/javascript'>alert('上传头像失败');location='../user/user.php';</script>";
}
?>
