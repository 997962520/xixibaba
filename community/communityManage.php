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
                        <li><a href="../index.html" class="on">首页</a></li>
                        <li><a href="../user/user.html">个人中心</a></li>
                        <li><a href="../course/course.php">课程中心</a></li>
                        <li><a href="communityCenter.php">社区中心</a></li>
                    </ul>
                </div>
                <div class="question">
                    <ul>
                        <li class="li5"><a href="../../xixibaba/community/createCommunity.html">创建社区</a></li>
                        <li class="li6"><a href="个人中心-我的提问.html">我要提问</a></li>
                        <li class="li7"><a href="个人中心-我的回答.html">我要问答</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!--container-->
<?php
$link = mysqli_connect("localhost", "root", "123456", "xixibaba");
if(!empty($_GET['id'])) {
    $sql = "SELECT * FROM `communities` WHERE `id` = '".$_GET['id']."'";
    $query = mysqli_query($link, $sql);
    $rs = mysqli_fetch_array($query, MYSQLI_BOTH);
    $img = "../images/comImg/" . $rs['cover_image_url'];
}
?>
<form action="editCommunity.php" method="post">
<div class="subbox">
    <!--左侧部分-->
    <div class="left180">
        <div class="grtx">
            <div class="grimg"><img src="<?php echo $img; ?>"/></div>
            <div class="grname"><a href="#"><?php echo $rs['name'] ?></a></div>
        </div>
        <ul class="menu1">
            <li class="on"><a onclick="return click_a('divOne_1')" style="cursor:pointer;"><em id="div_one">社区管理</em></a></li>
            <div class="menu1_sub" id="divOne_1" style="display:none;">
                <p><a href="../../bishe/个人中心-信息完善.html" >信息完善</a></p>
                <p><a href="../../bishe/个人中心-信息完善.html" >修改资料</a></p>
                <p><a href="../../bishe/个人中心-账户安全.html" >账户安全</a></p>
            </div>
            <div class="menubox">
                <p><a href="communityManage.php?id=<?php echo $rs['id'] ?>" >社区信息</a></p>
                <p><a href="communityNotice.php?id=<?php echo $rs['id'] ?>" >社区公告</a></p>
                <p><a href="#" >社区成员</a></p>
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
        <ul class="menu3">
            <li><a href="communityRes.php?id=<?php echo $rs['id'] ?>"><em>社区资料</em></a></li>
        </ul>
        <ul class="menu4">
            <li><a href="#"><em>在线互动</em></a></li>
            <div class="menubox">
                <p><a href="communityDebate.php?id=<?php echo $rs['id'] ?>" >社区讨论</a></p>
                <p><a href="活动管理.html" >活动管理</a></p>
            </div>
        </ul>
    </div>
    <!--右侧部分-->
    <div class="right840">
        <div class="title6">
            <h1><a href="communityManage.php?id=<?php echo $rs['id'] ?>" class="on">社区信息</a></h1>
        </div>
            <input type="hidden" name="hid" value="<?php echo $rs['id'] ?>"/>
        <div class="display">
            <table width="840" height="365" align="center" cellspacing="0" cellpadding="0" class="tab">
                <tr>
                    <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>社区名称:</b></td>
                    <td>&nbsp;&nbsp;&nbsp;<input type="text" class="input1" name="name" value="<?php echo $rs['name'] ?> ">&nbsp;</td>
                </tr>
                <tr>
                    <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>分 类:</b></td>
                    <td><table class="tab1" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;
                                    <select class="input7" name="location">
                                        <option>北京</option>
                                        <option>上海</option>
                                        <option>广东</option>
                                        <option>山东</option>
                                        <option>山西</option>
                                        <option>云南</option>
                                        <option>江苏</option>
                                        <option>江西</option>
                                        <option>浙江</option>
                                        <option>安徽</option>
                                        <option>福建</option>
                                        <option>广西</option>
                                        <option>湖南</option>
                                        <option>湖北</option>
                                        <option>重庆</option>
                                        <option>吉林</option>
                                        <option>甘肃</option>
                                        <option>陕西</option>
                                        <option>黑龙江</option>
                                    </select>
                                </td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>社区介绍:</b></td>
                    <td>&nbsp;&nbsp;&nbsp;
                        <textarea name="description" class="input4" style="width:610px; height:170px;"><?php echo $rs['description'] ?></textarea></td>
                </tr>
                <tr>
                    <td><font class="f_red">*</font>&nbsp;&nbsp;&nbsp;<b>社区头像:</b></td>
                    <td>
                        <input type="file"  class="input1" name="file" value="=<?php echo $rs['cover_image_url'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="保存信息" class="btn1" name="submit" />
                        &nbsp;&nbsp;&nbsp;
                        <input  type="reset" value="取消" class="btn4" /></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</form>
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
