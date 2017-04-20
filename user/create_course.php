<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/4/20
 * Time: 15:29
 */
session_start();
header("Content-Type:text/html;charset=utf-8");
require_once '../database.php';
$course_name = $_POST['course_name'];
$course_type = $_POST['course_type'];
$course_content = $_POST['course_content'];
if ($course_name == '' || $course_type == '请选择' || $course_content == '') {
    echo "<script type='text/javascript'>alert('请输入有效的课程名称、类别和简介！');location='./user_course.php';</script>";
} else {
    $my_db = new database();
    $result_last_course_id = $my_db->database_get("select id from course order by id desc limit 1");
    $last_course_id = $result_last_course_id[0]['id'];
    $new_course_id = $last_course_id + 1;//新课程id为最后一个课程id+1
    mkdir("../course/$new_course_id/");//创建封面和视频存放的文件夹，为新课程id
    $path = "../course/$new_course_id/";
    $image_file_name = $path . $new_course_id . ".jpg";//封面图片文件名
    $video_file_name = $path . $new_course_id . ".flv";//课程视频文件名
    /*$table = 'course';
    $values = array('name' => $course_name, 'time' => '', 'state' => 1, 'directory' => '', 'play_count' => 0, 'image' => '', 'content' => $course_content, 'approve' => 0, 'disapprove' => 0, 'type' => $course_type);
    $my_db->insert_to_db($table, $values);*/
    $my_db->database_do("insert into course values(\"$new_course_id\",\"$course_name\",\"\",\"1\",\"\",\"0\",\" \",\"$course_content\",\"0\",\"0\",\"$course_type\");");
    if ($_FILES['image']['error'] > 0) {
        die("出错了！" . $_FILES['photo']['error']);
    }
    if ($_FILES['video']['error'] > 0) {
        die("出错了！" . $_FILES['video']['error']);
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_file_name)) {
        echo "<script type='text/javascript'>alert('上传课程封面成功');location='../user/user_course.php';</script>";
    } else {
        echo "<BR>" . "Upload Failed!" . $_FILES['image']['error'];
        //echo "<script type='text/javascript'>alert('上传课程封面失败');location='../user/user_course.php';</script>";
    }
    if (move_uploaded_file($_FILES['video']['tmp_name'], $video_file_name)) {
        echo "<script type='text/javascript'>alert('上传课程视频成功');location='../user/user_course.php';</script>";
    } else {
        echo "<BR>" . "Upload Failed!" . $_FILES['video']['error'];
        //echo "<script type='text/javascript'>alert('上传课程视频失败');location='../user/user_course.php';</script>";
    }
}

