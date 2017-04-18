<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>安徽慕界网络科技有限公司</title>
    <link href="../css/whir_common.css" rel="stylesheet" type="text/css" />
    <link href="../css/whir_style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../script/jquery-1.7.2.min.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="../script/iepng.js"></script>
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
<div id="container">
    <?php
    $link = mysqli_connect("localhost", "root", "123456", "xixibaba");
    if(! isset($_SESSION['search']) || ! $_GET)
    $_SESSION['search'] = array();
    $_SESSION['search'] = array_merge($_SESSION['search'], $_GET);
    $aaa=join(' - ', $_SESSION['search']);
    $sql = "SELECT * FROM `communities` WHERE `location` LIKE '$aaa'";
    $query =mysqli_query($link,$sql);
    ?>
    <div class="title7">
        <h1><?php echo $aaa;?>社区</h1>
    </div>
    <div class="kssearch">
        <div class="address">
            <h1>按地区</h1>
            <h2>
                <a href="communitySearch.php?location=重庆">重庆</a>
                <a href="communitySearch.php?location=吉林">吉林</a>
                <a href="communitySearch.php?location=甘肃">甘肃</a>
                <a href="communitySearch.php?location=陕西">陕西</a>
                <a href="communitySearch.php?location=黑龙江">黑龙江</a>
                <a href="communitySearch.php?location=辽宁">辽宁</a>
                <a href="communitySearch.php?location=天津">天津</a>
                <a href="communitySearch.php?location=安徽">安徽</a>
                <a href="communitySearch.php?location=广西">广西</a>
                <a href="communitySearch.php?location=广东">广东</a>
                <a href="communitySearch.php?location=上海">上海</a>
                <a href="communitySearch.php?location=浙江">浙江</a>
                <a href="communitySearch.php?location=湖南">湖南</a>
                <a href="communitySearch.php?location=湖北">湖北</a>
                <a href="communitySearch.php?location=北京">北京</a>
                <a href="communitySearch.php?location=福建">福建</a>
                <a href="communitySearch.php?location=江西">江西</a>
                <a href="communitySearch.php?location=江苏">江苏</a>
                <a href="communitySearch.php?location=山东">山东</a>
                <a href="communitySearch.php?location=山西">山西</a>
                <a href="communitySearch.php?location=云南">云南</a></h2>
<!--            <script>-->
<!--function changeCSS() {-->
<!--    document.getElementById("1").innerHTML="beijing";-->
<!--}-->
<!--            </script>-->
        </div>
    </div>

    <div class="splist">
        <?php
        while($rs=mysqli_fetch_array($query,MYSQLI_BOTH)) {
            $img="../images/comImg/".$rs['cover_image_url'];
            ?>
            <div class="myvideo">
                <div class="myvideoimg"><img src="<?php echo $img; ?>"/>
                    <h3><a href="community.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['name'] ?></a></h3>
                </div>
                <div class="title3">
                    <div class="jiage"><a href="community.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['description']?></a></div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="page"><span class="prev">上一页</span><span class="num"><a href="#" class="on">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><a href="#">9</a><a href="#">10</a></span><span class="next"><a href="#">下一页</a></span>转到
        <input name="textfield" type="text" value="5" class="inputpage"/>
        页
        <input type="submit" name="Submit" value="GO" class="btngo"/>
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
