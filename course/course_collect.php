<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/4/19
 * Time: 10:00
 */
session_start();
require_once '../database.php';
$my_db = new database();
$course_id=$_GET['course_id'];
if (!isset($_SESSION['user_name']))//未登录不能收藏
    echo "<script type='text/javascript'>alert('未登录，不能进行课程收藏！');location='../course/course.php?course_id=$course_id';</script>";
$user_name = $_SESSION['user_name'];
$result_user = $my_db->database_get("select id from user where name='$user_name'");
@$user_id = $result_user[0]['id'];
$table='collection';
$values = array('course_id'=>$course_id,'user_id'=>$user_id);
$my_db->insert_to_db($table,$values);
echo "<script type='text/javascript'>alert('收藏成功！');location='../course/course.php?course_id=$course_id';</script>";