<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/2/23
 * Time: 10:46
 */
session_start();
require_once './database.php';
@$username = $_SESSION['user_name'];
$my_db = new database();
@$search_content = $_GET['search_content'];
$result = $my_db->database_get("select id,name,time,play_count,approve,disapprove,type from course where name like '%$search_content%'");
if (!isset($result))
    $count = 0;
else
    $count = count($result);

$html_A = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>茜茜爸爸儿童家庭学堂课程中心</title>
    <link href="css/whir_common.css" rel="stylesheet" type="text/css"/>
    <link href="css/whir_style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="script/jquery-1.7.2.min.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="script/iepng.js"></script>
    <script type="text/javascript">
    EvPNG.fix('img,.content,.svc-payment,.svc-gathering,.svc-weg,.svc-tx,.svc-credit,.svc-aa,.svc-donate,.svc-mobile,.svc-escore,.svc-rent,.svc-cashgift,.con,.aoff,'); </script>
    <![endif]-->
</head>
<body class="body">
<!--头部-->
<div id="header">
    <div class="top">
        <div class="topmain">
            <div class="searchbox">
                <div class="so_so">
                    <div class="logo"><a href="#" title="茜茜爸爸"><img src="images/logo.jpg" / alt="茜茜爸爸"></a></div>
                    <div class="mk_so">
                        <form id =form name="form" method="get" action="search_course.php">
                        <input type="text" class="input"  id="search_content" name="search_content"/>
                        <input type="image" src="images/btn.jpg" class="btn" onclick="this.form.submit()"/>
                        </form>
                    </div>
                </div>
                <div class="topmenu">
                    <div class="xsyd"><a href="#" target="_blank">新手引导</a></div>
                    <div class="hylist">
                        <ul>
                            <!--添加进收藏夹功能-->
                            <script>
                                function addToFavorite(sTitle, sURL) {
                                    try {
                                        window.external.addFavorite(sURL, sTitle);
                                    }
                                    catch (e) {
                                        try {
                                            window.sidebar.addPanel(sTitle, sURL, "");
                                        }
                                        catch (e) {
                                            alert("您的浏览器不支持自动加入收藏夹，请使用Ctrl+D进行手动添加");
                                        }
                                    }
                                }
                            </script>
                            <li class="li4"><a href="javascript:void(0)"
                                               onclick="addToFavorite(document.title,window.location)">收藏我们</a></li>
                        </ul>
                    </div>
                    <!--注册登录隐藏--->
                    <div id="pop" class="pop" style="display:none">
                        <div class="pop_head"><a href="javascript:void(0);" onclick="hideA()">关闭</a></div>
                        <div class="pop_body">
                            <h1>用户注册</h1>
                            <div class="zhuce">
                                <input type="text" class="inputl" value="请输入真实邮箱" onFocus="this.value='';"
                                       onBlur="if(this.value==''){this.value='请输入真实邮箱';}"/>
                                <input type="text" class="inputr" value="请输入用户名" onFocus="this.value='';"
                                       onBlur="if(this.value==''){this.value='请输入用户名';}"/>
                                <input type="password" class="inputb" value="请输入密码" onFocus="this.value='';"
                                       onBlur="if(this.value==''){this.value='请输入密码';}"/>
                                <div class="dlk"><a href="#" class="regist">注册</a><a href="#" class="login">返回登录</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="pop1" class="pop1" style="display:none">
                        <div class="pop_head1"><a href="javascript:void(expression);" onclick="hideB()">关闭</a></div>
                        <div class="pop_body1">
                            <h1>用户登陆</h1>
                            <div class="zhuce">
                                <input type="text" class="inputr" value="请输入用户名" onFocus="this.value='';"
                                       onBlur="if(this.value==''){this.value='请输入用户名';}"/>
                                <input type="password" class="inputb" value="请输入密码" onFocus="this.value='';"
                                       onBlur="if(this.value==''){this.value='请输入密码';}"/>
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
                        <li><a href="index.php" class="on">首页</a></li>
                        <li><a href="user/user.php">个人中心</a></li>
                        <li><a href="search_course.php">课程中心</a></li>
                        <li><a href="community/community.php">社区中心</a></li>
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
<div id="container">
    <div class="left958">
        <div class="kssearch1">
            <div class="address">
                <h1>按类型</h1>
                <h2><span>全部</span>
                    <a href="./search_course.php?type=1">数学</a>
                    <a href="./search_course.php?type=2">自然</a>
                    <a href="./search_course.php?type=3">艺术</a>
                    <a href="./search_course.php?type=4">英语</a>
                </h2>
            </div>
        </div>
    </div>
HTML;

$html_B = <<<HTML
    <div class="splist">
    
HTML;

$html_C = <<<HTML
</div>
    <div class="page"><span class="prev">上一页</span><span class="num"><a href="#" class="on">1</a></span><span class="next"><a href="#">下一页</a></span><em>1/1</em>转到
        <input name="textfield" type="text" value="1" class="inputpage"/>
        页
        <input type="submit" name="Submit" value="GO" class="btngo"/>
    </div>
</div>
HTML;

$html_D = <<<HTML
</div>
<div class="clear"></div>
<div class="copyright">
    <div class="copy">Copyright © 2017 茜茜爸爸儿童家庭学堂课程平台</a><br/>
        <font class="f_red">当前在线人数：<b>154588</b> 人</font></div>
</div>
</div>
</body>
</html>

HTML;

echo $html_A;
echo $html_B;

for ($i = 0; $i < $count; $i++) {
    $course_id = $result[$i]['id'];
    $course_play_count = $result[$i]['play_count'];
    $course_name = substr(($result[$i]['name']), 0, 45);//课程名字取前15个字显示
    $course_approve = $result[$i]['approve'];
    $course_disapprove = $result[$i]['disapprove'];
    @$course_approve_rate = substr(($course_approve / ($course_approve + $course_disapprove) * 100), 0, 2);//好评率取前两位整数
    $course_time = $result[$i]['time'];
    $path = "./course/$course_id/";
    $image_path = $path . $course_id . ".jpg";//视频封面图片的path
    $html_video = <<<HTML
    <div class="myvideo">
            <div class="myvideoimg"><img src="{$image_path}"/>
                <h3><a href=./course/course.php?course_id=$course_id>$course_name ...</a></h3>
                <span class="play1"><a href=./course/course.php?course_id=$course_id title="播放">播放</a></span><span class="time">$course_time</span></div>
            <div class="title3">
                <div class="jiage"><a href=./course/course.php?course_id=$course_id>$course_approve_rate %好评</a></div>
                <div class="playtime"><a href=./course/course.php?course_id=$course_id>$course_play_count 次播放"</a> | <a href="#">$course_approve 个好评"</a></div>
            </div>
    </div>
HTML;
    echo $html_video;
}
echo $html_C;
echo $html_D;
