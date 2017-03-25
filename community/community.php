<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>茜茜爸爸儿童家庭学堂社区中心</title>
    <link href="../css/whir_common.css" rel="stylesheet" type="text/css" />
    <link href="../css/whir_class.css" rel="stylesheet" type="text/css" />
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
                    <div class="logo"><a href="../xixibaba/index.html" title="茜茜爸爸"><img src="../images/logo.jpg" / alt="茜茜爸爸"></a></div>
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
                            <li class="li1"><a href="../user/user.html">会员</a></li>
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
                        <li><a href="../index.html">首页</a></li>
                        <li><a href="../user/user.html">个人中心</a></li>
                        <li><a href="../course.php">课程中心</a></li>
                        <li><a href="communityCenter.php" class="on">社区中心</a></li>
                    </ul>
                </div>
                <div class="question">
                    <ul>
                        <li class="li5"><a href="../../xixibaba/community/createCommunity.html">创建社区</a></li>
                        <li class="li6"><a href="../../bishe/个人中心-我的提问.html">我要提问</a></li>
                        <li class="li7"><a href="../../bishe/个人中心-我的回答.html">我要问答</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!--container-->
<div id="container">
    <div class="banner"><img src="../images/grzx/grbg.jpg" /></div>
    <?php
    $link = mysqli_connect("localhost", "root", "123456", "xixibaba");
    if(!empty($_GET['id'])) {
        $sql = "SELECT * FROM `communities` WHERE `id` = '".$_GET['id']."'";
        $query = mysqli_query($link, $sql);
        $rs = mysqli_fetch_array($query, MYSQLI_BOTH);
        $img = "../images/comImg/" . $rs['cover_image_url'];
    }
    ?>
    <!--社区信息-->
    <div class="grinfo">
        <div class="grphoto"><a href="communityManage.php?id=<?php echo $rs['id'] ?>"><img src="<?php echo $img; ?>"/></a></div>
        <div class="grxx">
            <div class="name"> <span class="grname"><?php echo $rs['name']?></span></div>
            <div class="grjj"><?php echo $rs['description']?></div>
            <div class="visit">
                <span class="jrbj"><a href="#">加入社区</a></span>
                <span class="guanzhu"><a href="#">关注</a></span>
                <span class="glpt"><a href="communityManage.php?id=<?php echo $rs['id'] ?>">管理平台</a></span>
            </div>
        </div>
    </div>
    <div class="mainbox">
        <div class="title">
            <h1><a href="#" class="on">资料下载</a></h1>
            <div class="nysearch">
                <input type="text" value="社区搜索" onFocus="this.value='';" onBlur="if(this.value==''){this.value='社区搜索';}" name=""  class="input3"/>
                <input type="image" src="../../bishe/images/grzx/button.jpg" class="btn2"/>
            </div>
        </div>
        <div class="clear"></div>
        <div class="left840">
            <div class="kssearch">
                <div class="ksfl">分类：<a href="#" class="ksqb">全部</a> <a href="#"> 中学教育</a> <a href="#"> 大学教育</a></div>
                <div class="ksph">排行：<a href="#" class="ksqb">全部</a> <a href="#"> 上传时间</a> <a href="#"> 播放最多</a> <a href="#">评论最多</a> </div>
            </div>
            <div class="zxsc">
                <ul>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />

                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--推荐的视频-->
            <div class="studyvideo">
                <div class="title2">
                    <h1>推荐</h1>
                </div>
                <ul>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                    <li class="myvideo">
                        <div class="myvideoimg"><img src="../../bishe/images/my.jpg" />
                            <h3><a href="#">Nancy带你【玩转法兰西】...</a></h3>
                            <span class="play1"><a href="#" title="播放">播放</a></span><span class="time">02:10</span></div>
                        <div class="title1">
                            <div class="playtime"><a href="#">308次播放</a> | <a href="#">629次评论</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <!--社区成员-->
            <div class="cjclass">
                <div class="title3">
                    <h1>社区成员</h1>
                </div>
                <ul>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                    <li> <a href="#"><img src="../../bishe/images/grzx/lytx.jpg" />情为何物</a> </li>
                </ul>
            </div>
        </div>
        <div class="right295">
            <div class="title4">
                <h1>社区公告</h1>
            </div>
            <div class="classnotice">
                <div class="noticetext"><?php echo $rs['notice'] ?>.</div>
                <div class="teacher">
                    <div class="teacimg"><img src="../../bishe/images/class/pic.jpg" /></div>
                    <div class="teacherinfo">
                        <div class="tcname"> <span class="tcgrname">王老师</span><span class="tcdengji"><img src="../../bishe/images/grzx/vip.jpg" /> 等级1</span></div>
                        <div class="tcjifen">访问量：20万  |  积分：200分</div>
                        <div class="tcgrjj">王老师数学系专业，任教20年……</div>
                    </div>
                </div>
                <input type="image" src="../../bishe/images/class/tw.jpg" style="margin-top:10px;"/>
            </div>
            <!--会员排名-->
            <div class="title4">
                <h1>会员排名</h1>
            </div>
            <ul class="classpa">
                <li>
                    <div class="xbimg"><img src="../../bishe/images/class/xbpm.jpg" width="34" height="34" /></div>
                    <div class="xbnr">
                        <div class="tcjj"><span class="tcnum">1</span><a href="#">联发科技但</a></div>
                        <div class="tcinfo">只要找到适合你的学习方法，你也是学霸……</div>
                    </div>
                </li>
                <li>
                    <div class="xbimg"><img src="../../bishe/images/class/xbpm.jpg" width="34" height="34" /></div>
                    <div class="xbnr">
                        <div class="tcjj1"><span class="tcnum">2</span><a href="#">联发科技但</a></div>
                        <div class="tcinfo">只要找到适合你的学习方法，你也是学霸……</div>
                    </div>
                </li>
                <li>
                    <div class="xbimg"><img src="../../bishe/images/class/xbpm.jpg" width="34" height="34" /></div>
                    <div class="xbnr">
                        <div class="tcjj1"><span class="tcnum">3</span><a href="#">联发科技但</a></div>
                        <div class="tcinfo">只要找到适合你的学习方法，你也是学霸……</div>
                    </div>
                </li>
            </ul>
            <!--社区讨论-->
            <div class="title4">
                <h1>社区讨论</h1>
            </div>
            <div class="xqlist">
                <ul>
                    <li>
                        <div class="xqtx"><img src="../../bishe/images/grzx/lytx.jpg" /></div>
                        <div class="xqnr">
                            <div class="title5">
                                <h2><a href="#">t物</a></h2>
                                <span>5小时前</span></div>
                            <div class="xyzs">完善宪法、依法治国，不让党内的腐败份子有空可钻，保障群众的合法利益……</div>
                        </div>
                    </li>
                    <li>
                        <div class="xqtx"><img src="../../bishe/images/grzx/lytx.jpg" /></div>
                        <div class="xqnr">
                            <div class="title5">
                                <h2><a href="#">王老师</a></h2>
                                <span>5小时前</span></div>
                            <div class="xyzs">完善宪法、依法治国，不让党内的腐败份子有空可钻，保障群众的合法利益……</div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--讨论版-->
            <div class="title4">
                <h1>讨论版</h1>
            </div>
            <div class="team_l">
                <textarea name="" cols="48" rows="10" class="input2" value="说点什么吧..."></textarea>
                <br />
                <div class="biaoqing"><img src="../../bishe/images/grzx/bq.jpg" /><a href="#">添加表情</a></div>
                <input type="submit" name="Submit" class="btn3" value="确定发布">
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div id="footer">
    <div class="links">
        <div class="linkpic">
            <h1>合作单位</h1>
            <div class="picshow">
                <div id="demo" style="width:1017px; height:49px; overflow:hidden;">
                    <table border=0 align=center cellpadding=0 cellspacing=0 cellspace=0 >
                        <tr>
                            <td valign=top  id=marquePic1><table width='100%' border='0' cellspacing='0'>
                                    <tr>
                                        <td align=center><a href="http://class.hujiang.com" target="_blank"><img src="../images/link1.jpg" /></a></td>
                                        <td align=center><a href="http://www.haixue.com" target="_blank"><img src="../images/link2.jpg" /></a></td>
                                        <td align=center><a href="http://www.tianxiawangxiao.com" target="_blank"><img src="../images/link3.jpg" /></a></td>
                                        <td align=center><a href="http://www.jibeiyun.com" target="_blank"><img src="../images/link4.jpg" /></a></td>
                                        <td align=center><a href="http://www.zgjhjy.com" target="_blank"><img src="../images/link5.jpg" /></a></td>
                                        <td align=center><a href="http://www.duia.com" target="_blank"><img src="../images/link6.jpg" /></a></td>
                                        <td align=center><a href="http://www.wangxiao.cn" target="_blank"><img src="../images/link7.jpg" /></a></td>
                                    </tr>
                                </table></td>
                            <td id=marquePic2 valign=top></td>
                        </tr>
                    </table>
                </div>
                <script type="text/javascript">
                    var speed=50
                    marquePic2.innerHTML=marquePic1.innerHTML
                    function Marquee(){
                        if(demo.scrollLeft>=marquePic1.scrollWidth){
                            demo.scrollLeft=0
                        }else{
                            demo.scrollLeft++
                        }
                    }
                    var MyMar=setInterval(Marquee,speed)
                    demo.onmouseover=function() {clearInterval(MyMar)}
                    demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
                </script>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="copyright">
        <div class="copy">Copyright © 2017 茜茜爸爸儿童家庭学堂课程平台</a><br /></div>
    </div>
</div>
</body>
</html>
