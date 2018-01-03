<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
        <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/base.css">
    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/footer.css">
     <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/header.css">
     <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/liMarquee.css" />
    <script src="<?php echo THEME_PATH; ?>js/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="head">
            <div class="top">
                <ul>
                    <li>
                        <strong>欢迎进入中国电子商务协会电子商务推进中心官方网站！</strong>
                    </li>
                    <li style="padding-right:40px;">
                        <form action="" id="form1">
                            用户名：<input type="text" class="user">&nbsp;&nbsp;&nbsp;
                            密码: <input type="password" class="pass">&nbsp;&nbsp;&nbsp;
                            <input type="submit" value="登录" class="login">
                        </form>
                    </li>
                    <li>
                        <strong>[注册]</strong>
                    </li>
                    <li style="padding-right:44px;">
                        今天是：2017年12月21日&nbsp;&nbsp;星期四
                    </li>
                    <li style="padding-right:0;">
                        <a href="javascript:;" class="a1">设为首页</a>
                        &nbsp;|&nbsp;
                        <a href="javascript:;" class="a2">加入收藏</a>
                    </li>
                </ul>
            </div>
            <header><img src="<?php echo THEME_PATH; ?>img/logo.jpg" alt=""></header>
            <nav>
                <ul>
                    <?php $rt = $this->list_tag("action=category pid=0 num=10"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                	
                    <li class="title"><a href="javascript:;"><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></li>
                    <li class="line">
                        <img src="<?php echo THEME_PATH; ?>img/nave2.jpg" alt="">
                    </li>
                    <?php } } ?>
                </ul>
            </nav>
            <div class="news">
                <strong>最新公告:</strong>
                <div class="con" id="parent_id">
                    <ul id="content1" style="position: relative;">
                    	<?php $rt = $this->list_tag("action=module catid=49"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                        <li>
                            <a href="<?php echo $t['url'].'&pid=49'; ?>"><?php echo $t['title']; ?></a>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
