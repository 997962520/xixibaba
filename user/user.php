<?php
session_start();
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/1/15
 * Time: 11:09
 */


if (!isset($_SESSION['user_name']))
    echo "<script type='text/javascript'>alert('未登录，不能进入个人中心');location='../index.html';</script>";

require_once '../database.php';
$user_name = $_SESSION['user_name'];
$my_db = new database();
$result = $my_db->database_get("select name,email,phone,location,introduction from user where name=$user_name");
$old_user_location = $result[0]['location'];
$old_user_phone = $result[0]['phone'];
$old_user_introduction = $result[0]['introduction'];
$path = "./user_image/";
$image_path = $path . $user_name . ".jpg";

$html_A = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>茜茜爸爸儿童家庭学堂课程中心</title>
<link href="../css/whir_common.css" rel="stylesheet" type="text/css" />
<link href="../css/whir_grzx.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="../script/iepng.js"></script>
<script src="../script/thumbnails.js" type="text/javascript"></script>
<script type="text/javascript"> 
EvPNG.fix('img,.content,.svc-payment,.svc-gathering,.svc-weg,.svc-tx,.svc-credit,.svc-aa,.svc-donate,.svc-mobile,.svc-escore,.svc-rent,.svc-cashgift,.con,.aoff,'); </script>
<![endif]-->
</head>
<body>
<!--头部-->
<div id="header">
  <div class="top">
    <div class="topmain">
      <div class="searchbox">
        <div class="so_so">
          <div class="logo"><a href="#" title="茜茜爸爸"><img src="../images/logo.jpg"></a></div>
          <div class="mk_so">
            <form id =form name="form" method="get" action="../search_course.php">
              <input type="text" class="input"  id="search_content" name="search_content"/>
              <input type="image" src="../images/btn.jpg" class="btn" onclick="this.form.submit()"/>
            </form>
          </div>
        </div>
        <div class="topmenu">
          <div class="xsyd"><a href="#" target="_blank">新手引导</a></div>
          <div class="hylist">
            <ul>
              <script>
                function logout(){
                  if (confirm("确认退出？")){
                    top.location = "../logout.php";
                  }
                  return false;
                }
              </script>
              <li class="li1"><a href="#" onclick="logout();">注销</a></li>
              <!--添加进收藏夹功能-->
              <script>
                function addToFavorite(sTitle,sURL)
                {
                  try
                  {
                    window.external.addFavorite(sURL, sTitle);
                  }
                  catch (e)
                  {
                    try
                    {
                      window.sidebar.addPanel(sTitle, sURL, "");
                    }
                    catch (e)
                    {
                      alert("您的浏览器不支持自动加入收藏夹，请使用Ctrl+D进行手动添加");
                    }
                  }
                }
              </script>
              <li class="li4"><a href="javascript:void(0)" onclick="addToFavorite(document.title,window.location)">收藏我们</a></li>
            </ul>
          </div>
		  				  <!--注册登录隐藏--->
	  <div id="pop" class="pop" style="display:none"> 
<div class="pop_head"><a href="javascript:void(0);" onclick="hideA()">关闭</a></div> 
<div class="pop_body">
<h1>用户注册</h1>
<div class="zhuce">
<input type="text" class="inputl" value="请输入真实邮箱" onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入真实邮箱';}" />
<input type="text" class="inputr" value="请输入用户名" onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入用户名';}" />
<input type="password" class="inputb" value="请输入密码" onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入密码';}" />
<div class="dlk"><a href="#" class="regist">注册</a><a href="#" class="login">返回登录</a></div>
</div>
</div> 
</div> 

<div id="pop1" class="pop1" style="display:none"> 
<div class="pop_head1"><a href="javascript:void(expression);" onclick="hideB()">关闭</a></div> 
<div class="pop_body1">
<h1>用户登陆</h1>
<div class="zhuce">
<input type="text" class="inputr" value="请输入用户名"  onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入用户名';}"/>
<input type="password" class="inputb" value="请输入密码" onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入密码';}" />
<div class="dlk"><a href="#" class="regist">登陆</a><a href="#" class="login">注册</a></div>
</div>
</div> 
</div>

        </div>
      </div>
      <!--菜单导航-->
      <div class="topnavmenu">
        <div class="nav">
          <ul>
            <li><a href="../index.html" class="on">首页</a></li>
            <li><a href="user.php">个人中心</a></li>
            <li><a href="../course.php">课程中心</a></li>
            <li><a href="../community/community.php">社区中心</a></li>
          </ul>
        </div>
        <div class="question">
          <ul>
            <li class="li6"><a href="个人中心-我的提问.html">我要提问</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>
<!--container-->
<div class="subbox">
  <!--左侧部分-->
  <div class="left180">
    <div class="grtx">
      <div class="grimg"><img src="./user_image/$user_name.jpg" /></div>
      <div class="grname"><a href="#">$user_name</a></div>
    </div>
    <ul class="menu1">
      <li class="on"><a onclick="return click_a('divOne_1')" style="cursor:pointer;"><em id="div_one">个人中心</em></a></li>
      <div class="menu1_sub" id="divOne_1" style="display:none;">
        <p><a href="user.php" >信息完善</a></p>
        <p><a href="user_icon.php" >修改头像</a></p>
        <p><a href="user_security.php" >账户安全</a></p>
      </div>
      <div class="menubox">
        <p><a href="user.php" >个人资料</a></p>
        <p><a href="user_icon.php" >修改头像</a></p>
        <p><a href="user_security.php" >账户安全</a></p>
      </div>
    </ul>
    <script language="javascript" type="text/javascript">
        function click_a(divDisplay)
        {
            if(document.getElementById(divDisplay).style.display != "block")
            {
                document.getElementById(divDisplay).style.display = "block";
            }
            else
            {
                document.getElementById(divDisplay).style.display = "none";
            }
        }
    </script>
    <ul class="menu2">
      <li><a href="../个人中心-我加入的班级.html"><em>班级管理</em></a></li>
      <div class="menubox">
        <p><a href="../个人中心-我加入的班级.html" >我创建的班级</a></p>
        <p><a href="../个人中心-我加入的班级.html" >我加入的班级</a></p>
      </div>
    </ul>
    <ul class="menu3">
      <li><a href="#"><em>视频管理</em></a></li>
      <div class="menubox">
        <p><a href="../个人中心-上传视频.html" >上传视频</a></p>
        <p><a href="#" >我的收藏</a></p>
        <p><a href="../个人中心-观看记录.html" >观看记录</a></p>
      </div>
    </ul>
    <ul class="menu4">
      <li><a href="#"><em>我的互动</em></a></li>
      <div class="menubox">
        <p><a href="../个人中心-我的笔记.html" >我的笔记</a></p>
        <p><a href="../个人中心-心情日志.html" >心情日志</a></p>
        <p><a href="../个人中心-我的回答.html" >我的提问</a></p>
        <p><a href="../个人中心-我的回答.html" >我的回答</a></p>
        <p><a href="../个人中心-留言.html" >留言板</a></p>
      </div>
    </ul>
    <ul class="menu5">
      <li><a href="../个人中心-我的视频.html"><em>我的课程</em></a></li>
      <div class="menubox">
        <p><a href="../个人中心-我的视频.html" >学习中视频</a></p>
        <p><a href="../个人中心-我的视频.html" >猜你喜欢</a></p>
      </div>
    </ul>
  </div>
  <!--右侧部分-->
  <div class="right840">
    <div class="title6">
      <h1><a href="user.php" class="on">信息完善</a></h1>
      <h1><a href="user_icon.php">修改头像</a></h1>
      <h1><a href="user_security.html">账户安全</a></h1>
    </div>
    <div class="display">
      <table width="840" height="900" align="center" cellspacing="0" cellpadding="0" class="tab">
HTML;
/*<tr>
          <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>用户名:</b></td>
          <td>&nbsp;&nbsp;&nbsp;afsdfds@163.com &nbsp;&nbsp;&nbsp;<a href="#"></a></td>
        </tr>
        <tr>
          <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>邮 箱:</b></td>
          <td>&nbsp;&nbsp;&nbsp;afsdfds@163.com &nbsp;&nbsp;&nbsp;<a href="#"></a></td>
        </tr>
*/
$html_user_A = <<<HTML
      <form method="get" action="user_change_information.php">
        <tr>
          <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>用户名:</b></td>
          <td>&nbsp;&nbsp;&nbsp;{$user_name}&nbsp;&nbsp;&nbsp;<a href="#"></a></td>
        </tr>
        <tr>
          <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>邮 箱:</b></td>
          <td>&nbsp;&nbsp;&nbsp;{$result[0]['email']}&nbsp;&nbsp;&nbsp;<a href="#"></a></td>
        </tr>
        <tr>
          <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>手 机:</b></td>
          <td>&nbsp;&nbsp;&nbsp;<input type="text" class="input1"  name="user_phone" value=$old_user_phone>&nbsp;&nbsp;&nbsp;<font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<font class="f_black">请输入数字</font></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<b>个人介绍:</b></td>
          <td>&nbsp;&nbsp;&nbsp;<textarea name="user_introduction" class="input4" style="width:430px; height:130px;">{$old_user_introduction}</textarea></td>
        </tr>
        <tr>
          <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>所在地:</b></td>
          <td>&nbsp;&nbsp;&nbsp;<input type="text" class="input1"  name="user_location" value=$old_user_location>&nbsp;&nbsp;&nbsp;<font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<font class="f_black">请输入所在地</font></td>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;<input type="submit" value="保存信息" class="btn1" /></td>
        </tr>
       </form>
HTML;

$html_B = <<<HTML
      </table>
    </div>
  </div>
</div>
<div class="clear"></div>

  <div class="copyright">
    <div class="copy">Copyright © 2017 茜茜爸爸儿童家庭学堂课程平台</a><br />
      <font class="f_red">当前在线人数：<b>154588</b> 人</font></div>
  </div>
</div>
</body>
</html>
HTML;
echo $html_A;
echo $html_user_A;
echo $html_B;
