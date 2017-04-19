<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/4/19
 * Time: 10:42
 */
session_start();
$t=time();
$time=date("Y-m-d H:i:s",$t);
$course_id = $_GET['course_id'];
$comment_content=$_POST['comment_content'];
if (!isset($_SESSION['user_name']))
    echo "<script type='text/javascript'>alert('没有登陆，不能发表评论！');location='../course/course.php?course_id=$course_id';</script>";

require_once '../database.php';
if($comment_content=="")
    echo "<script type='text/javascript'>alert('评论内容不能为空！');location='../course/course.php?course_id=$course_id';</script>";
$user_name = $_SESSION['user_name'];
$my_db = new database();
$result_user = $my_db->database_get("select id from user where name=$user_name");
$user_id=$result_user[0]['id'];
$table='comment';
$values = array('user_id'=>$user_id,'course_id'=>$course_id, 'content'=>$comment_content,'time'=>$time,'approve'=>0,'disapprove'=>0);
$my_db->insert_to_db($table,$values);
echo "<script type='text/javascript'>alert('评论发表成功，感谢您的评论！');location='../course/course.php?course_id=$course_id';</script>";