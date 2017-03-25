<?php
$link = mysqli_connect("localhost", "root", "123456", "xixibaba");
if (!empty($_POST['submit']))
{
    $notice=$_POST['notice'];
    $hid=$_POST['hid'];
    $sql="UPDATE `communities` SET `notice` = '$notice' WHERE `communities`.`id` = '$hid'";
    mysqli_query($link, $sql);
    header("location:http://localhost/xixibaba/community/communityCenter.php");

}
?>