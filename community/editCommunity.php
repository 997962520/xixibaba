<?php
$link = mysqli_connect("localhost", "root", "123456", "xixibaba");
if (!empty($_POST['submit']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $location =$_POST['location'];
    $file =$_POST['file'];
    $hid=$_POST['hid'];
    $sql="UPDATE `communities` SET `name` = '$name',`description`='$description',`location`='$location',`cover_image_url`='$file' WHERE `communities`.`id` = '$hid' ";
    mysqli_query($link, $sql);
    header("location:http://localhost/xixibaba/community/communityCenter.php");

}
?>