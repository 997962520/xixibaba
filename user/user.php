<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/1/15
 * Time: 11:09
 */
require_once '../database.php';
session_start();
$user_name = $_SESSION['user_name'];
$old_password = $_GET['old_password'];
$new_password = $_GET['new_password'];
$confirm_new_password = $_GET['confirm_new_password'];
$my_db=new database();