<?php
/**
 * Created by PhpStorm.
 * User: XZC
 * Date: 2017/1/15
 * Time: 11:11
 */
session_start();
require_once '../database.php';
@$username = $_SESSION['user_name'];
$my_db = new database();
$course_id = $_GET['course_id'];
$result_user = $my_db->database_get("select id from user where name='$username'");
@$user_id = $result_user[0]['id'];
$result = $my_db->database_get("select * from course where id='$course_id'");
$course_name = $result[0]['name'];
$course_time = $result[0]['time'];
$course_play_count = $result[0]['play_count'];
$course_content = $result[0]['content'];
$course_approve = $result[0]['approve'];
$course_disapprove = $result[0]['disapprove'];
$course_type=$result[0]['type'];
$result_relative_course=$my_db->database_get("select * from course where type = '$course_type'");
$count_relative_course=count($result_relative_course);


$html_A = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>茜茜爸爸儿童家庭学堂课程中心</title>
    <link href="../css/whir_common.css" rel="stylesheet" type="text/css"/>
    <link href="../css/whir_style.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="../script/iepng.js"></script>
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
                    <div class="logo"><a href="#" title="茜茜爸爸"><img src="../images/logo.jpg" / alt="茜茜爸爸"></a></div>
                    <div class="mk_so">
                        <input type="text" class="input" name=""/>
                        <input type="image" src="../images/btn.jpg" class="btn"/>
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
                        <li><a href="../index.php" class="on">首页</a></li>
                        <li><a href="../user/user.php">个人中心</a></li>
                        <li><a href="../search_course.php">课程中心</a></li>
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
<div class="player_container">
    <div class="mod_crumbs"><a href="../index.php" target="_blank" title="首页">首页</a>&gt; <a href="javascript:;" target="_blank" title="课程中心">课程中心</a></div>
    <h1 class="mod_player_title" title="大学时代">$course_name</h1>
    <!--视频播放及相关视频-->
    <div class="mod_player_section cf" id="mod_inner">
        <div class="mod_player" id="mod_player">
        <script src="../script/flowplayer-3.2.11.min.js" type="text/javascript"></script>
            <div id="my52player" style="width: 856px; height: 520px;">    </div>
            <script>flowplayer("my52player", "flowplayer-3.2.12.swf", { clip: { url: "../course/$course_id/$course_id.flv", autoPlay: true, autoBuffering: true} });</script>  
        </div>
        <div class="mod_video_album_section mod_video_album_section_v3" id="fullplaylist">
            <div class="mod_video_list_section ui_scroll_box mod_video_list_section_2">
                <div class="mod_video_list_content ui_scroll_content" id="mod_videolist">
                    <div class="album_title">
                        <h1>相关课程</h1>
                    </div>
                    <ul>
                    
HTML;
$html_B = <<<HTML
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--点赞-->
    <div class="agree"><span class="dzsc"><a href="#" class="dianz">$course_approve</a><a href="course_collect.php?course_id=$course_id" class="kdsc">收藏</a></span> <span
            class="fenx">
    <div class="bshare-custom icon-medium">
      <div class="bsPromo bsPromo2"></div>
      <a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a
            title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div>
    <script type="text/javascript" charset="utf-8"
            src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
    </span> <span class="cishu"><img src="../images/gkcs.jpg"/>&nbsp;&nbsp;$course_play_count 次播放</span> <span
            style="float:right; margin-top:30px;">
    </span></div>
    <!--视频简介-->
    <div class="playerjj">
        <ul>
            <li>
                <div class="upname">
                    <div class="upnameimg"><img src="../images/upname.jpg" width="61" height="60"/></div>
                    <div class="upnamet">昵称:<a href="#">拍客现场</a><br/>
                        <img src="../images/xbg.jpg"/></div>
                </div>
                <div class="upinfo">
                    <h1>课程简介:</h1>
                    <p>
$course_content</p>
                    <span>9小时前 上传</span></div>
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<!--留言-->
<div class="lybox">
    <div class="guestbook">
        <div class="left868">
            <!--留言板-->
            <div class="fbpl">
                <div class="plr"><span class="pltx"><a href="#"><img src="../user/user_image/$username.jpg" width="61" height="61"/></a></span><span class="plname"><a
                        href="#">$username</a></span><span class="plnum">所有评论<a href="#"> 21</a></span></div>
                <textarea name="textarea" class="input4"></textarea>
                <input type="image" src="../images/fbpl.jpg" style="margin-left:25px;"/> 
            </div>
            <!--留言列表-->
            <div class="lylist">
                <div class="title1">
                    <h1>全部评论（21）</h1>
                    <div class="plpage">
                        <div class="page1"><span class="num"><font class="f_blue">1</font>/1</span><span class="prev">上一页</span><span
                                class="next"><a href="#">下一页</a></span></div>
                    </div>
                </div>
                <ul class="pllist">
                    <li>
                        <div class="lyimg"><a href="#"><img src="../images/grzx/lyimg.jpg"/></a></div>
                        <div class="lyinfo">
                            <div class="lyname"><span class="myname"><a href="#">huo_zhenying</a></span></div>
                            <div class="gxqm">为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多
</div>
                            <div class="reque">36分钟前 来自iPad客户端 <span class="zhuanfa"><a href="#">转发</a><a
                                    href="#">回复</a></span></div>
                        </div>
                    </li>
                    <li>
                        <div class="lyimg"><a href="#"><img src="../images/grzx/lyimg.jpg"/></a></div>
                        <div class="lyinfo">
                            <div class="lyname"><span class="myname"><a href="#">huo_zhenying</a></span></div>
                            <div class="gxqm">为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多
</div>
                            <div class="reque">36分钟前 来自iPad客户端 <span class="zhuanfa"><a href="#">转发</a><a
                                    href="#">回复</a></span></div>
                        </div>
                    </li>
                    <li>
                        <div class="lyimg"><a href="#"><img src="../images/grzx/lyimg.jpg"/></a></div>
                        <div class="lyinfo">
                            <div class="lyname"><span class="myname"><a href="#">huo_zhenying</a></span></div>
                            <div class="gxqm">为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多
</div>
                            <div class="reque">36分钟前 来自iPad客户端 <span class="zhuanfa"><a href="#">转发</a><a
                                    href="#">回复</a></span></div>
                        </div>
                    </li>
                    <li>
                        <div class="lyimg"><a href="#"><img src="../images/grzx/lyimg.jpg"/></a></div>
                        <div class="lyinfo">
                            <div class="lyname"><span class="myname"><a href="#">huo_zhenying</a></span></div>
                            <div class="gxqm">为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多
</div>
                            <div class="reque">36分钟前 来自iPad客户端 <span class="zhuanfa"><a href="#">转发</a><a
                                    href="#">回复</a></span></div>
                        </div>
                    </li>
                    <li>
                        <div class="lyimg"><a href="#"><img src="../images/grzx/lyimg.jpg"/></a></div>
                        <div class="lyinfo">
                            <div class="lyname"><span class="myname"><a href="#">huo_zhenying</a></span></div>
                            <div class="gxqm">为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多
</div>
                            <div class="reque">36分钟前 来自iPad客户端 <span class="zhuanfa"><a href="#">转发</a><a
                                    href="#">回复</a></span></div>
                        </div>
                    </li>
                    <li>
                        <div class="lyimg"><a href="#"><img src="../images/grzx/lyimg.jpg"/></a></div>
                        <div class="lyinfo">
                            <div class="lyname"><span class="myname"><a href="#">huo_zhenying</a></span></div>
                            <div class="gxqm">为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火 募捐的人更多为什么不叫汪峰来更火
                                募捐的人更多为什么不叫汪峰来更火 募捐的人更多
</div>
                            <div class="reque">36分钟前 来自iPad客户端 <span class="zhuanfa"><a href="#">转发</a><a
                                    href="#">回复</a></span></div>
                        </div>
                    </li>
                </ul>
                <div class="page"><span class="prev">上一页</span><span class="num"><a href="#" class="on">1</a></span><span class="next"><a href="#">下一页</a></span><em>1/1</em>转到
                    <input name="textfield" type="text" value="1" class="inputpage"/>页
                    <input type="submit" name="Submit" value="GO" class="btngo"/>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div id="footer">
    <div class="copyright">
        <div class="copy">Copyright © 2017 茜茜爸爸儿童家庭学堂课程平台</a><br/>
            <font class="f_red">当前在线人数：<b>154588</b> 人</font></div>
    </div>
</div>
</body>
</html>
HTML;
echo $html_A;
for($i=0;$i<$count_relative_course;$i++)
{
    $relative_course_id=$result_relative_course[$i]["id"];
    $relative_course_name=$result_relative_course[$i]["name"];
    $relative_course_play_count=$result_relative_course[$i]["play_count"];
    $relative_course_approve=$result_relative_course[$i]["approve"];
    $html_relative_course=<<<HTML
    <li class="item"><a class="item_link" href="course.php?course_id=$relative_course_id" title="$relative_course_name"> 
        <span class="album_pic"> 
            <img width="117px" height="65px" src="../course/$relative_course_id/$relative_course_id.jpg" alt="$relative_course_name"> </span>
            <div class="video_title"><strong>$relative_course_name</strong><br/>
                   播放：$relative_course_play_count 次<br/>
                   好评：$relative_course_approve 次
            </div>
            </a>
    </li>
HTML;
    echo $html_relative_course;
}
echo $html_B;
?>

