<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/1/15
 * Time: 11:11
 */
session_start();
require_once 'database.php';
$username=$_SESSION['user_name'];
$my_db=new database();
$result = $my_db->database_get("select * from user where name='$username'");
echo $result[0]['id'];
echo $result[0]['name'];
echo $result[0]['password'];
echo $result[0]['email'];
echo $result[0]['phone'];
echo $result[0]['status'];
echo $result[0]['location'];
echo $result[0]['introduction'];
?>