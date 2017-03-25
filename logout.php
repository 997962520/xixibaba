<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/3/7
 * Time: 13:59
 */
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['class_id']);
session_unset();
echo "<script type='text/javascript'>location = 'index.html'</script>";