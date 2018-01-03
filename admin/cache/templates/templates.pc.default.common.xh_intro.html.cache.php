<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
	<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">
	     <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/intro.css">
	      <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/extra.css">
	       <link rel="stylesheet" href="css/base.css">
	    <div class="body"> 
	       <div class="sanjiliandong">   	
        <span>你现在所在的位置 ：</span>
        <a href="/index.php?c=category&id=39">首页</a> >
        <span> <?php echo $cat['name']; ?></span>
        <span> </span>
    </div>
    <?php if ($_GET["id"]==40||$_GET["id"]==67) { ?>
 <div class="container22">
        <div class="fl clearfix fl_box">
            <div class="fl_topone">  <img src="<?php echo THEME_PATH; ?>img/pic.jpg" alt="" style="width: 12px;height: 12px;float: left;margin-top: 9px">
                &nbsp;协会简介</div>
            <div class="xh_txt">
					<?php echo $content; ?>
            </div>
        </div>
        <div class="fr clearfix fr_box">
            <div>
                <a href="/index.php?c=category&id=60"><img src="<?php echo THEME_PATH; ?>img/lianxiw.jpg" alt="" style="width:280px; height:117px; background: red"></a>
            </div>
        </div>
    </div>
<?php }  if ($_GET["id"]==60||$_GET["id"]==69) { ?>
 <div class="container22">
 	
        <div class="fl clearfix fl_box">
            <div class="fl_topone">  <img src="<?php echo THEME_PATH; ?>img/pic.jpg" alt="" style="width: 12px;height: 12px;float: left;margin-top: 9px">
                &nbsp;联系我们</div>
            <div class="xh_txt">
					<?php echo $content; ?>
            </div>
        </div>
        <div class="fr clearfix fr_box">
            <div>
                <a href="/index.php?c=category&id=40"><img src="<?php echo THEME_PATH; ?>img/xiehuij.jpg" alt="" style="width:280px; height:117px; background: red"></a>
            </div>
        </div>
    </div>
 <?php }  if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
