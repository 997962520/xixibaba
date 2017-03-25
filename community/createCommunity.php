<?php
$link = mysqli_connect("localhost", "root", "123456", "xixibaba");
if (!empty($_POST['submit']))
{
    $name = $_POST['name'];
    if(!empty($name))
    {
        $description = $_POST['description'];
        $location =$_POST['location'];
        $file =$_POST['file'];
        $sql = "insert into `communities`(`id`,`name`,`description`,`location`,`cover_image_url`,`notice`,`join_review`) values (null,'$name','$description','$location','$file',null,'0')";
        mysqli_query($link, $sql);
        header("location:http://localhost/xixibaba/community/communityCenter.php");
    }
    else
    {
        echo "<script language='javascript'>alert('请先填写社区名称');</script>";
    }
}
?>
