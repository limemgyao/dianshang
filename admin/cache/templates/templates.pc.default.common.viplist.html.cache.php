<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/menber.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/base.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/extra.css">
<div class="body">
	<div class="sanjiliandong">
        <span>你现在所在的位置 ：</span>
        <a href="/index.php?c=category&id=39">首页 </a> >
        <span> 协会会员</span>
        <span> </span>
    </div>
        <div class="container">
        <div class="fl clearfix mem_fl_box">
            <div class="mem_list1">
                <div class="fl_topone clearfix">
                    <span class="fl">
                          <img src="<?php echo THEME_PATH; ?>img/pic.jpg" alt="" style="width: 12px;height: 12px;float: left;margin-top: 9px">
                &nbsp;会员单位</span>
                    <a class="fr" style="color:black;font-size:12px" href="javascript:;">更多>></a>
                </div>
                <ul class="clearfix">
                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>
                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>
                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>
                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>
                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>
                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>
                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>

                    <li class="clearfix">
                        <a class="fl" href="javascript:;">理事长单位</a>
                        <a class="fr" href="javascript:;">[详细]</a>
                    </li>
                  

                    <!--填入内容-->
                </ul>

                <div height="40" colspan="4" align="center" style="font-size:13px;">
                    <a href="#">首页</a>&nbsp;<a href="#">
                    &lt;&lt;上一页</a>
                    <font style="color:#999; ">1</font>
                    <a href="#">2</a> <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">下一页&gt;&gt;</a>&nbsp;
                    <a href="#">尾页</a>
                </div>
            </div>
            <div class="mem_list2">
                <div class="fl_topone clearfix">
                    <span class="fl">
                          <img src="img/pic.jpg" alt="" style="width: 12px;height: 12px;float: left;margin-top: 9px">
                &nbsp;会员风采</span>
                <?php $rt = $this->list_tag("action=category id=81"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <a class="fr" style="color:black;font-size:12px" href="<?php echo $t['url']; ?>">更多>></a>
               <?php } } ?>
                </div>
                <ul>
                	<?php $rt = $this->list_tag("action=module catid=81"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if (strlen($t['title'])>140) { ?>
                    <li class="clearfix" style="font-size: 14px;font-family: '宋体';color: #333;">
                        <a href="<?php echo $t['url'].'&pid=81'; ?>" class="fl"><?php echo mb_substr($t['title'],0,40,'utf-8'); ?>..</a>
                        <span class="fr"><?php echo substr($t['updatetime'],0,28); ?></span>
                    </li>
                    <?php }  if (strlen($t['title'])<140) { ?>
                    <li class="clearfix" style="font-size: 14px;font-family: '宋体';color: #333;">
                        <a href="<?php echo $t['url'].'&pid=81'; ?>" class="fl" ><?php echo $t['title']; ?></a>
                        <span class="fr"><?php echo substr($t['updatetime'],0,28); ?></span>
                    </li>
                    <?php }  } } ?>
                </ul>
            </div>
            <div class="mem_list3">
                <div class="fl_topone clearfix">
                    <span class="fl">
                          <img src="<?php echo THEME_PATH; ?>img/pic.jpg" alt="" style="width: 12px;height: 12px;float: left;margin-top: 9px">
                &nbsp;会员申请</span>
              
                    <a class="fr" style="color:black;font-size:12px" href="<?php echo $t['url']; ?>">更多>></a>
                 
                </div>
            </div>
        </div>

        <div class="fr clearfix fr_box">
            <div class="fr_top_box">
                <div class="fl_topone">
                    <img src="<?php echo THEME_PATH; ?>img/pic.jpg" alt="" style="">
                    &nbsp;&nbsp;中心动态
                </div>
                <div class="fl_list">
                    <ul>
                        <?php $rt = $this->list_tag("action=module  catid=47 num=10"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                        <li class="one-txt-cut">
                            <a class="" href="<?php echo $t['url'].'&pid=47'; ?>"><?php echo $t['title']; ?></a>
                        </li>
                        <?php } } ?>
                        
                    </ul>
                </div>
                 <a href="/index.php?c=category&id=49"><img src="<?php echo THEME_PATH; ?>img/tongzhig.jpg" alt="" style="width:260px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=56"><img src="<?php echo THEME_PATH; ?>img/hangyed.jpg" alt="" style="width:260px; height:117px; background: red"></a>

            </div>
        </div>
    </div>
    <!--链接开始-->
    </div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
