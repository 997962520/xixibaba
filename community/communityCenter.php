<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>茜茜爸爸儿童家庭学堂社区中心</title>
    <link href="../css/whir_common.css" rel="stylesheet" type="text/css" />
    <link href="../css/whir_style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../script/jquery.min.js"></script>
    <script type="text/javascript" src="../script/zhuce.js"></script>
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
                        <li><a href="../course/course.php">课程中心</a></li>
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
<!--活动展示-->
<div class="Aflash">
    <ul class="picUL">
        <li class="picLI" id="j-focusPic">
            <div class="picbox j-slider" style="left: -22310px;">
        <span class="j-item">
          <a target="_blank" href="#" title="【开学季】透过英语看世界">
            <img width="1190" src="../images/flash1.jpg" data-src="../images/flash1.jpg" class="loading">
          </a>
        </span>
                <span class="j-item">
          <a target="_blank" href="#" title="【节日礼】纯正西方节日，带娃FUN肆英语！">
            <img width="1190" src="../images/flash2.jpg" data-src="../images/flash2.jpg" class="loading">
          </a>
        </span>
                <span class="j-item">
          <a target="_blank" href="#" title="动物大救援“救”等你来">
            <img width="1190" src="../images/flash3.jpg" data-src="../images/flash3.jpg" class="loading">
          </a>
        </span>
                <span class="j-item">
          <a target="_blank" href="#" title="【假期限定】2017学科英语寒假班">
            <img width="1190" src="../images/flash4.jpg" data-src="../images/flash4.jpg" class="loading">
          </a>
        </span>
            </div>
            <div class="bg j-infobg" style="opacity: 0.5;"></div>
            <div class="info j-info" style="display: block;">
                <div class="infotxt w">
                    <h2><a target="_blank" href="#" title="【假期限定】2017学科英语寒假班">【假期限定】2017学科英语寒假班</a></h2>
                    <p><a target="_blank" href="#" title="【假期限定】2017学科英语寒假班">学科英语寒假班，美式教学，包含4-8岁英语敏感期课程、9-12岁口语规范期课程，10天80小时，孩子爱上英语，轻松好成绩。</a></p>
                </div>
            </div>
            <div class="info j-infocontainer" style="display:none;">
                <div class="infotxt w">
                    <h2><a target="_blank" href="#" title="【开学季】透过英语看世界">【开学季】透过英语看世界</a></h2>
                    <p><a target="_blank" href="#" title="【开学季】透过英语看世界">2017开学季，3-5岁探索式英语玩中学，6-12岁学科英语轻松提分，短短2小时，孩子开口说英语</a></p>
                </div>
                <div class="infotxt w">
                    <h2><a target="_blank" href="#" title="【节日礼】纯正西方节日，带娃FUN肆英语！">【节日礼】纯正西方节日，带娃FUN肆英语！"</a></h2>
                    <p><a target="_blank" href="#" title="【节日礼】纯正西方节日，带娃FUN肆英语！">2016年10月-2017年1月，每月1个西方节日：万圣节、感恩节、圣诞节、2017新年。节日主题游戏，英语停不下来！</a></p>
                </div>
                <div class="infotxt w">
                    <h2><a target="_blank" href="#" title="动物大救援“救”等你来">动物大救援“救”等你来</a></h2>
                    <p><a target="_blank" href="#" title="动物大救援“救”等你来">这个寒假，化身“动物救援家”，为拯救濒危野生动物发出你的倡议宣言吧。动物大救援，“救”等你来！</a></p>
                </div>
                <div class="infotxt w">
                    <h2><a target="_blank" href="#" title="【假期限定】2017学科英语寒假班">【假期限定】2017学科英语寒假班</a></h2>
                    <p><a target="_blank" href="#" title="【假期限定】2017学科英语寒假班">学科英语寒假班，美式教学，包含4-8岁英语敏感期课程、9-12岁口语规范期课程，10天80小时，孩子爱上英语，轻松好成绩。</a></p>
                </div>
            </div>
        </li>
    </ul>
    <div class="infobtn" id="j-focusBtns">
        <div class="pre on-1">
            <a href="javascript:void(0)"></a>
            <i style="display:none"></i>
        </div>
        <div class="smalpic j-container">
            <div class="smallbox j-slider" style="left: 0px;">
                <a class="j-item" href="http://www.risecenter.com/activity/2017SpringActivity/index.html?a=cityview&city=34" title="【开学季】透过英语看世界" target="_blank">
                    <img src="../images/flash1.jpg" alt="【开学季】透过英语看世界">
                    <b></b>
                </a>
                <a class="j-item" href="#" title="【节日礼】纯正西方节日，带娃FUN肆英语！" target="_blank">
                    <img src="../images/flash2.jpg" alt="【节日礼】纯正西方节日，带娃FUN肆英语！">
                    <b></b>
                </a>
                <a class="j-item" href="#" title="动物大救援“救”等你来" target="_blank">
                    <img src="../images/flash3.jpg" alt="动物大救援“救”等你来">
                    <b></b>
                </a>
                <a class="j-item" href="#" title="【假期限定】2017学科英语寒假班" target="_blank">
                    <img src="../images/flash4.jpg" alt="【假期限定】2017学科英语寒假班">
                    <b></b>
                </a>
            </div>
        </div>
        <div class="next"><a href="javascript:void(0)"></a><i style="display:none"></i></div>
    </div>
</div>
<script type="text/javascript" src="../script/zzsc.js"></script>
<!--container-->
<div id="container">
    <div class="clear"></div>
    <!--查找社区-->
    <div class="title4">
        <h1><font class="f_blue">查找</font>社区</h1>
    </div>
        <!--快速搜索-->
        <div class="kssx">
            <div class="diqu">
                <h2>按地区</h2>
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
                <a href="communitySearch.php?location=云南">云南</a>
            </div>
        </div>
        <!--热门社区-->
        <div class="hotclass">
            <div class="title7">
                <h1><font class="f_blue">热门</font>社区</h1>
                <a href="#" class="more">更多&gt;</a></div>
            <?php
            $link = mysqli_connect("localhost", "root", "123456", "xixibaba");
            $sql = "SELECT * FROM `communities` WHERE `id` <= 5";
            $query =mysqli_query($link,$sql);
            ?>
            <ul class="picList1">
                <?php
                while ($rs=mysqli_fetch_array($query,MYSQLI_BOTH)) {
                    $img = "../images/comImg/" . $rs['cover_image_url'];
                    ?>
                    <li>
                        <div class="pic"><a href="community.php?id=<?php echo $rs['id'] ?>" target="_blank"><img src="<?php echo $img; ?>"/></a>
                        </div>
                        <div class="titlei"><span class="classtitle"><a href="community.php?id=<?php echo $rs['id'] ?>"
                                                                        target="_blank"> <?php echo $rs['name'] ?></a></span><span
                                    class="classinfo"> 社区描述：<a
                                        href="community.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['description'] ?></a></span></div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!--我的社区-->
        <div class="hotclass">
            <div class="title6">
                <h1><font class="f_blue">我的</font>社区</h1>
                <a href="#" class="more">更多&gt;</a></div>
            <?php
            $link = mysqli_connect("localhost", "root", "123456", "xixibaba");
            $sql = "SELECT * FROM `communities` WHERE `id` <= 5";
            $query =mysqli_query($link,$sql);
            ?>
            <ul class="picList1">
                <?php
                while($rs=mysqli_fetch_array($query,MYSQLI_BOTH)) {
                    $img = "../images/comImg/" . $rs['cover_image_url'];

                    ?>
                    <li>
                        <div class="pic"><a href="community.php?id=<?php echo $rs['id'] ?>" target="_blank"><img src="<?php echo $img; ?>"/></a>
                        </div>
                        <div class="titlei"><span class="classtitle"><a href="community.php?id=<?php echo $rs['id'] ?>"
                                                                        target="_blank"> <?php echo $rs['name'] ?></a></span><span
                                    class="classinfo"> 社区描述：<a
                                        href="community.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['description'] ?></a></span></div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!--问题解答及难题悬赏-->
        <div class="wenti">
            <div class="wenticolumn">
                <div class="title8">
                    <h1><font class="f_blue">问题</font>解答</h1>
                    <a href="#" class="more">更多&gt;</a></div>
                <div class="wtjdlist">
                    <div class="toppic"><img src="../images/pic10.jpg" /><a href="#">用4条红绳怎么编成圆绳？？</a></div>
                    <ul>
                        <li><span><a href="#">8回答</a></span>·<a href="#">中考语文古诗词鉴赏题型及解题技巧?</a></li>
                        <li><span><a href="#">8回答</a></span>·<a href="#">中考语文古诗词鉴赏题型及解题技巧?</a></li>
                        <li><span><a href="#">8回答</a></span>·<a href="#">中考语文古诗词鉴赏题型及解题技巧?</a></li>
                        <li><span><a href="#">8回答</a></span>·<a href="#">中考语文古诗词鉴赏题型及解题技巧?</a></li>
                        <li><span><a href="#">8回答</a></span>·<a href="#">中考语文古诗词鉴赏题型及解题技巧?</a></li>
                        <li><span><a href="#">8回答</a></span>·<a href="#">中考语文古诗词鉴赏题型及解题技巧?</a></li>
                        <li><span><a href="#">8回答</a></span>·<a href="#">中考语文古诗词鉴赏题型及解题技巧?</a></li>
                    </ul>
                </div>
            </div>
            <div class="wenticolumn" style="float:right;">
                <div class="txtScroll-top">
                    <div class="hd">
                        <h1><font class="f_blue">难题</font>悬赏</h1>
                        <a href="#" class="more">更多&gt;</a> </div>
                    <div class="bd">
                        <ul class="infoList">
                            <li><span class="icon"><img src="../images/qiang.jpg" /></span><a href="#" target="_blank">钢铁是怎样炼成的读怎样炼成的读怎样炼成的读后了我的提感400字</a><span class="jb">25</span></li>
                            <li><span class="icon"><img src="../images/ji.jpg" /></span><a href="#" target="_blank">钢铁是怎样炼成的读怎样炼成的读怎样炼成的读后了我的提感400字</a><span class="jb">25</span></li>
                            <li><span class="icon"><img src="../images/arrow.jpg" /></span><a href="#" target="_blank">钢铁是怎样炼成的读怎样炼成的读怎样炼成的读后了我的提感400字</a><span class="jb">25</span></li>
                            <li><span class="icon"><img src="../images/arrow.jpg" /></span><a href="#" target="_blank">钢铁是怎样炼成的读怎样炼成的读怎样炼成的读后了我的提感400字</a><span class="jb">25</span></li>
                            <li><span class="icon"><img src="../images/arrow.jpg" /></span><a href="#" target="_blank">钢铁是怎样炼成的读怎样炼成的读怎样炼成的读后了我的提感400字</a><span class="jb">25</span></li>
                            <li><span class="icon"><img src="../images/arrow.jpg" /></span><a href="#" target="_blank">钢铁是怎样炼成的读怎样炼成的读怎样炼成的读后了我的提感400字</a><span class="jb">25</span></li>
                            <li><span class="icon"><img src="../images/arrow.jpg" /></span><a href="#" target="_blank">钢铁是怎样炼成的读怎样炼成的读怎样炼成的读后了我的提感400字</a><span class="jb">25</span></li>
                        </ul>
                    </div>
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
