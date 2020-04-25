<?php
session_start();
require './common/init.php';
error_reporting(0);
$uid=$_SESSION['UID'];
$user="SELECT * FROM `et` WHERE `id`='$uid'";
$user=mysqli_query($conn,$user);
$user=mysqli_fetch_assoc($user);
$_user=$user['id'];
if($uid!=$_user){
    echo "<script>alert('出错');</script>";
    exit;
}
$_SESSION['UID']=$user['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>源博客</title>    
    <script src="js/index.js"></script>
    <link href="css/index.css" type="text/CSS" rel="stylesheet">
</head>
<body>
    <div id="big_body">
        <div id="big_content_div">
            <!--顶部导航栏开始-->
            <div id="nav_top">
                <ul id="nav_top_left">
                    <li class="li_first"><a href="#">首页</a></li>
                    <li><a href="#">新闻</a></li>
                    <li><a href="#">体育</a></li>
                    <li><a href="#">财经</a></li>
                    <li><a href="#">娱乐</a></li>
                    <li><a href="#">科技</a></li>
                    <li><a href="#">博客</a></li>
                    <li><a href="#">图片</a></li>
                    <li><a href="#">专栏</a></li>
                    <li><a href="#" id="more">更多</a></li>
                </ul>
                <ul id="nav_top_right">
                    <h>
                        <?php 

                    if(empty($uid)){
                            echo '<font color="red">未登录</font>';
                    }else{
                     echo '欢迎'.'&nbsp&nbsp&nbsp;'.'<font color="red">'.$user['email'].'!'.'</font>';
                    }
                    ?> 
                    </h>
                    <li><a href="#" id="denglu">登录</a></li>
                    <li><a href="login.html">注册</a></li>
                    <li class="li_last"><a href="#" id="kehu">移到客户端</a></li>
                </ul>
                <!-- 更多下的div开始 -->
                    <div id="more_div">
                        <ul>
                            <li><a href="#">汽车</a></li>
                            <li><a href="#">教育</a></li>
                            <li><a href="#">时尚</a></li>
                            <li><a href="#">女性</a></li>
                            <li><a href="#">星座</a></li>
                            <li><a href="#">健康</a></li>
                        </ul>
                        <hr/>
                        <ul>
                            <li><a href="#">房产</a></li>
                            <li><a href="#">历史</a></li>
                            <li><a href="#">视频</a></li>
                            <li><a href="#">收藏</a></li>
                            <li><a href="#">育儿</a></li>
                            <li><a href="#">读书</a></li>
                        </ul>
                        <hr/>
                        <ul>
                            <li><a href="#">佛学</a></li>
                            <li><a href="#">游戏</a></li>
                            <li><a href="#">旅游</a></li>
                            <li><a href="#">邮箱</a></li>
                            <li><a href="#">导航</a></li>
                        </ul>
                    </div>

                    <div id="phone_div">
                            <img src="images/phone_saoma.JPG">
                    </div>

                    <div id="denglu_div">
                        <div id="denglu_div_left">
                            <p>请用最新版微博客户端扫码</p>
                            <img src="images/sina_ma.JPG" id="phone" width="70%" top="50px">
                        </div>
                        <div id="denglu_div_right">
                            <p>微博、博客、邮箱账号，请直接登录</p>
                            <br/>
                            <form action="./php/land.php" method="post">
                            <input type="text" name="user" placeholder="邮箱/手机号" class="denglu_kuang" required>
                            <br/>
                            <br/>
                            <input type="password" name="pwd" placeholder="请输入密码" class="denglu_kuang" required>
                            <br/>
                            <input type="submit" value="登录" class="denglu_anniu">
                            <input type="checkbox" value="" style="vertical-align: middle;">下次自动登录
                            </form>
                            <br/>
                            <ul>
                                <li><a href="#">忘记密码</a></li>
                                <li><a href="login.html">立即注册</a></li>                         
                            </ul>
                            <br/>
                            <img src="images/qq.JPG" class="denglu_qq">
                            <a href="#">使用QQ登录</a>
                        </div>

                    </div>

                    <div id="kehu_div">
                        <ul>
                            <li><a href="#">微博</a></li>
                            <li><a href="#">新闻</a></li>
                            <li><a href="#">体育</a></li>
                            <li><a href="#">娱乐</a></li>
                            <li><a href="#">财经</a></li>
                            <li><a href="#">众测</a></li>
                            <li><a href="#">博客</a></li>
                            <li><a href="#">视频</a></li>
                            <li><a href="#">游戏</a></li>
                            <li><a href="#">天气通</a></li>
                        </ul>
                    </div>

    
                    <!-- 更多下的div结束 -->
            </div>
            <!--顶部导航栏结束-->
            <!-- 广告栏开始 -->
            <div id="advertising">
                <a href="#"><img src="images/adv2.JPG" width="10%"></a>
            </div>
            <!-- 广告栏开始 -->
            <!-- 红色导航栏开始 -->
            <div id="nav_red">
                <i><a href="#" class="sian_style1">博客</a></i>
                <ul>
                    <li><a href="#">娱乐</a></li>
                    <li><a href="#">文史</a></li>
                    <li><a href="#">股票</a></li>
                    <li><a href="#">教育</a></li>
                    <li><a href="#">体育</a></li>
                    <li><a href="#">美食</a></li>
                    <li><a href="#">育儿</a></li>
                    <li><a href="#">星座</a></li>
                    <li><a href="#">排行榜</a></li>
                </ul>
                <a href="#" class="sian_style2">博客地图</a>
                <select class="sian_style3">
                    <option value="" selected="selected">博文</option>
                    <option value="">标题</option>
                    <option value="">作者</option>
                    <option value="">标签</option>
                </select>
                <input type="text" placeholder="搜索内容" class="sian_style4">
            </div>
            <!-- 红色导航栏结束 -->
            <!-- 内容开始 -->
            <?php
            require './common/init.php';
            ?>
            <div id="content_div">
                <!-- 左边的div开始 -->
            <div id="content_left_div">
                   <!--  <a href="#"><img src="images/adv1.JPG" class="img1"></a> -->
                    
                    <span class="subject">———  每日精选  ———</span>
                    <ul class="subject_down">
            <?php
                $result=mysqli_query($conn,"SELECT * from `everyday`");
                $data=mysqli_fetch_array($result);
            do{
            ?>
            <li><a href=<?php echo $data['lianjie'];?>><?php echo $data['text'];?></a></li>
            <?php
                }while($data=mysqli_fetch_array($result));
            ?>
                    
                    </ul>
                    
                    <span class="subject">———  活动专区  ———</span>
                    <br>
                   <!--  <a href="#"><img src="images/adv2.JPG" class="img1"></a> -->
                    <br/>
                    <ul class="subject_down">
                        <?php
                $result=mysqli_query($conn,"SELECT * from `active`");
                $data=mysqli_fetch_array($result);
            do{
            ?>
                        <li><a href="#"><?php echo $data['text']; ?></a></li>
                         <?php
                }while($data=mysqli_fetch_array($result));
            ?>
                      
                    </ul>
                    <br/>
                    
                    <span class="subject">———  每周人气排名  ———</span>
                    <div id="popularity">
                            <ul>
                                 <?php
                $result=mysqli_query($conn,"SELECT * from `weekpm`");
                $data=mysqli_fetch_array($result);
            do{
            ?>
                                    <li>
                                        <span><?php echo $data['pm'];?></span>
                                        <a href="#">
                                            <img src=<?php echo $data['pic']?>>
                                            <p><?php echo $data['name'];?></p>
                                        </a>
                                    </li>
                                     <?php
                }while($data=mysqli_fetch_array($result));
            ?>
                                 
                            </ul>
                    </div>
                    
                </div>
                <!-- 左边的div结束 -->

                <!-- 中间上的div开始 -->
                <div id="content_center_div">
                        <div class="all" id='box'>
                                <div class="screen"><!--相框-->
                                <ul>
                                    <li><img src="images/1.jpg" width="650" /></li>
                                    <li><img src="images/2.jpg" width="650" /></li>
                                    <li><img src="images/3.jpg" width="650" /></li>
                                    <li><img src="images/4.jpg" width="650" /></li>
                                    <li><img src="images/5.jpg" width="650" /></li>
                                </ul>
                                <ol>
                                </ol>
                                </div>
                                <div id="arr"><span id="left">&lt;</span><span id="right">&gt;</span></div>
                        </div>
                        
                        <div id="center_down">
                            <!-- <span class="jiaoju">聚</span> -->
                              <?php
                $result=mysqli_query($conn,"SELECT * from `jujiao`");
                $data=mysqli_fetch_array($result);
           
            ?>
                            <a class="jiao" style="border: 1px solid #999; padding: 10px; "><?php echo $data['title'];?></a>
                            <br/>
                          <!--   <span class="jiaoju">焦</span> -->
                            <a class="hot">热点</a>
                            <a><?php echo $data['title1'];?></a>
                            <span>|</span>
                            <a class="ju"><?php echo $data['title2'];?></a> 
                            <ul class="jiaoju_down">
                                <li></li><hr>
           <?php 
                               do{ 
           ?>
                                <li><!-- <span><?php echo $data['pm'];?></span> --><a href=<?php ?>><?php echo $data['text'];?></a></li><hr/> <?php
                }while($data=mysqli_fetch_array($result));
            ?>
                                
                            </ul>
                        </div>      
                        <div id="center_img">
                            <a href="#" class="more_img1">图片精选</a>
                            <span class="more_img2">更多</span>
                            <br/>
                            <br/>
                            <hr/>
                            <div id="img_div">
                                <table>
                                    <tr>
                                        <td><a href="#"><img src="images/3.jpg"</a></td>
                                        <td><a href="#"><img src="images/3.jpg"</a></td>
                                        <td><a href="#"><img src="images/3.jpg"</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"></a></td>
                                        <td><a href="#"></a></td>
                                        <td><a href="#"></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img src="images/3.jpg"</a></td>
                                        <td><a href="#"><img src="images/3.jpg"</a></td>
                                        <td><a href="#"><img src="images/3.jpg"</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"></a></td>
                                        <td><a href="#"></a></td>
                                        <td><a href="#"></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                </div>
                <!-- 中间上的div结束 -->

                <!-- 右边上的div开始 -->
                <div id="content_right_div">
                    <div id="login">
                        <p>博友，欢迎回来！</p>
                    <form action="./php/land.php" method="POST">
                        <input type="text" name="user" placeholder="邮箱/手机号" required>
                        <br/>
                        <input type="password" name="pwd" placeholder="请输入密码" required>
                        <br/>
                        <input type="submit" value="登陆" class="login_anniu" href="javascript:;">
                        <input class="style5" type="checkbox" value="" >
                        <span>下次自动登录</span>
                        <br/>
                    </form>
                        <a href="login.html">立即注册</a>
                        <a href="#">忘记密码</a>
                        <a class="login_help" href="#">帮助中心</a>
                    </div>
                    <br/>
                    <hr/>
                    <br/>
                    <span class="daka">博客大咖说</span>
                    <div>
                    <ul id="daka_say">
            <?php
                $result=mysqli_query($conn,"SELECT * from `dakasay`");
                $data=mysqli_fetch_array($result);
                do{
            ?>
                        <li>
                            <a href="#"><img src=<?php echo $data['pic'];?>></a>
                            <div><p><?php echo $data['fabiao']?></p><span><?php echo $data['name'];?></span></div>
                        </li>
            <?php           
                }while($data=mysqli_fetch_array($result));
            ?>

      </div>                
                    </ul>
                   <!--  <div class="adv3_div"><a href="#"><img src="images/adv3.JPG"></a></div> -->
                    <br/>
                    <hr/>
                    <br/>
                    <span class="daka">每日图说</span>
                    <br/>
            <?php
                    $result=mysqli_query($conn,'SELECT * from `everydaypicsay`');
                    $data=mysqli_fetch_array($result);
            ?>

                    <div class="adv3_div"><a href="#"><img src=<?php echo $data['pic'];?>></a></div>
            <?php 
                    do{
            ?>
                    <a class="tushuo1"><h4><?php echo $data['name'];?></h4></a>
                    <a href="#" class="tushuo2"><?php echo $data['text'];?></a>
            <?php
                    }while($data=mysqli_fetch_array($result));
            ?>
                </div>
                <!-- 右边上的div结束 -->
            </div>
            <!-- 内容结束 -->
            <!-- 广告栏开始 -->
       <!--      <div id="advertising">
                    <a href="http://www.baidu.com"><img src="images/advertising1.JPG" width="100%"></a>
            </div> -->
            <div style="clear: both;"></div>
            <!-- 广告栏开始 -->
            <!-- 下部分内容开始 -->
            <div id="next_content_div">
                <!-- 下部分左边内容开始 -->
                <div id="next_content_left">
                    <span class="fengge_span">—— 作者推荐 ——</span>
                    <hr/>
                    <ul class="recommend">
        <?php
                    $result=mysqli_query($conn,'SELECT * from `workertj`');
                    $data=mysqli_fetch_array($result);
                    do{
        ?>
                        <li>
                            <a href="#" class="recommend_a">
                                <img src=<?php echo $data['pic'];?>>
                                <span><?php echo $data['name'];?></span>
                                <p>关注+</p>
                            </a>
                        </li>
        <?php
                    }while($data=mysqli_fetch_array($result));
        ?>
                       
                    </ul>
                    <br/>
                    <span class="fengge_span">—— 今日热文排名 ——</span>
                    <br/>
                    <ul class="hot_write">
        <?php
                    $result=mysqli_query($conn,'SELECT * from `todaypm`');
                    $data=mysqli_fetch_array($result);
                    do{
        ?>
                        <li><span><?php echo $data['pm'];?></span><a href=<?php echo $data['lianjie'];?>><?php echo $data['text'];?></a></li>
        <?php
                    }while($data=mysqli_fetch_array($result));
        ?>
                    </ul>
                    <br/>
                    <br/>
                    

                </div>
                <!-- 下部分左边内容结束 -->

                <!-- 下部分右边内容开始 -->
                <div id="next_content_right">
                    <!-- 固定导航栏开始 -->
                    <div id="fixed_nav" class="nav1">
                        <ul class="fixed_ul">
                            <li><a href="#">全部</a></li>
                            <li><a href="#">历史</a></li>
                            <li><a href="#">文化</a></li>
                            <li><a href="#">旅游</a></li>
                            <li><a href="#">摄影</a></li>
                            <li><a href="#">美食</a></li>
                            <li><a href="#">情感</a></li>
                            <li class="fixed_li" id="fixed_a"><a href="javascript:;">更多</a></li>
                        </ul>
                        <div id="fixed_a_down">
                                <ul>
                                        <li><a href="#">汽车</a></li>
                                        <li><a href="#">教育</a></li>
                                        <li><a href="#">时尚</a></li>
                                        <li><a href="#">女性</a></li>
                                        <li><a href="#">星座</a></li>
                                        <li><a href="#">健康</a></li>
                                        <li><a href="#">星座</a></li>
                                        <li><a href="#">健康</a></li>
                                </ul>
                                <hr/>
                                <ul>
                                        <li><a href="#">汽车</a></li>
                                        <li><a href="#">教育</a></li>
                                        <li><a href="#">时尚</a></li>
                                        <li><a href="#">女性</a></li>
                                        <li><a href="#">星座</a></li>
                                        <li><a href="#">健康</a></li>
                                        <li><a href="#">星座</a></li>
                                        <li><a href="#">健康</a></li>
                                </ul>
                                <hr/>
                                <ul>
                                        <li><a href="#">房产</a></li>
                                        <li><a href="#">历史</a></li>
                                        <li><a href="#">视频</a></li>
                                        <li><a href="#">收藏</a></li>
                                        <li><a href="#">育儿</a></li>
                                        <li><a href="#">读书</a></li>
                                </ul>
                        </div> 
                        <div id="next_center">
                  <?php
                    $result=mysqli_query($conn,'SELECT * from `talk`');
                    $data=mysqli_fetch_array($result);
        ?>
                  <?php do{
                    ?>  
                    <h3><?php echo $data['title'];?></h3>
                    
                            <p><?php echo $data['text'];?></p>
                            <br/>
                            <img src=<?php echo $data['pic'];?>>
                            <a><?php echo $data['name'];?></a><br> 
                            <span><a onclick="myFunction()"><h4>评论✎</h4></a></span><span><?php echo $data['time'];?></span>
                            <p id="demo"></p>
                    <script>
                    function myFunction(){
                        var x;
                        var person=prompt("请输入你的评论"," ");
                        if (person!=null && person!=""){
                            x=" " + person + " "; 
                            document.getElementById("demo").innerHTML=x;
                        }
                    }
                    </script>
                    <?php }while( $data=mysqli_fetch_array($result)); ?>
                            <hr/>
                        </div>
                    </div>
                    <!-- 固定导航栏结束 -->
                   


                    <div id="next_right">
                                <?php
                    $result=mysqli_query($conn,'SELECT * from `dahua`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                        <hr/>
                        <span class="right_biaoti">大话历史</span>
                        <br/>
                            <ul class="right_wen">
       <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                                
                            </ul>
                            <hr/>
                            <span class="right_biaoti">娱乐咖</span>
                            <br/>
                                    <?php
                    $result=mysqli_query($conn,'SELECT * from `yule`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                            <ul class="right_wen">
                                <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                               
                            <hr/>
                            <span class="right_biaoti">爱旅游</span>
                            <br/>
                                    <?php
                    $result=mysqli_query($conn,'SELECT * from `ailu`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                            <ul class="right_wen">
                               <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                               
                            </ul>
                            <hr/>
                            <span class="right_biaoti">爱摄影</span>
                            <br/>
                                    <?php
                    $result=mysqli_query($conn,'SELECT * from `aishe`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                            <ul class="right_wen">
                              <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                              
                            </ul>
                            <hr/>
                            <span class="right_biaoti">爱美食</span>
                            <br/>
                                    <?php
                    $result=mysqli_query($conn,'SELECT * from `aimei`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                            <ul class="right_wen">
                               <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                              
                            </ul>
                            <hr/>
                            <span class="right_biaoti">星座达人</span>
                            <br/>
                                    <?php
                    $result=mysqli_query($conn,'SELECT * from `xingzuo`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                            <ul class="right_wen">
                               <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                            
                            </ul>
                            <hr/>
                            <span class="right_biaoti">体育星</span>
                            <br/>
                                    <?php
                    $result=mysqli_query($conn,'SELECT * from `tiyu`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                            <ul class="right_wen">
                                <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                            
                            </ul>
                            <hr/>
                            <span class="right_biaoti">育儿篇</span>
                            <br/>
                                    <?php
                    $result=mysqli_query($conn,'SELECT * from `yuer`');
                    $data=mysqli_fetch_array($result);
                    
        ?>
                            <ul class="right_wen">
                               <?php 
                    do{                 
        ?>
                <li><span>·</span><a href=<?php echo $data['lianjie']?>><?php echo $data['content']?></a></li>
        <?php
                   }while( $data=mysqli_fetch_array($result));  
        ?>
                                
                            </ul>
                    </div>

                </div>
                <!-- 下部分右边内容结束 -->
            </div>
            <!-- 下部分内容结束 -->
        </div>

     <!-- 固定div开始 -->
     <div id="clear_float" ></div>
   <!--  <div class="nav" id="left_fixed_div">
        <span class="gf_span">—— 官方微博 ——</span>
         <img src="images/5.jpg">
         <img src="images/adv4.JPG">
    </div> -->

     <!-- 固定div结束 -->
    
    
    
    </div>

</body>
</html>