<?php if ($_GET["id"]!=59) {  if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
	<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
	<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">
	 <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/extra.css">
	 <div class="body">   
	<div class="sanjiliandong">
        <span>你现在所在的位置 ：</span>
        <a href="#">首页></a>
        <?php echo $cat['name']; ?>
        <span> </span>
    </div>
    <!--内容部分-->
    <div class="container22">
        <div class="fl clearfix fl_box">
            <div class="fl_top">
	 &nbsp;<?php echo $cat['name']; ?>
            </div>
          <?php if ($cat['id']!=78) { ?>
            <div class="fl_list">
                <ul>
                	<?php if (is_array($catlist)) { $count=count($catlist);foreach ($catlist as $t) {  if (strlen($t['title'])>120) { ?>
		                	<li class="clearfix one-txt-cut "><a href="<?php echo $t['url']; ?>&pid=<?php echo $t['catid']; ?>"><?php echo mb_substr($t['title'],0,40,'utf-8'); ?>...</a>
		                		<span class="fr"><?php echo date('Y-m-d',$t['updatetime']) ?></span>
		                	</li>
		                <?php }  if (strlen($t['title'])<120) { ?>
	                		<li class="clearfix one-txt-cut "><a href="<?php echo $t['url'].'&pid='.$t['catid']; ?>"><?php echo $t['title']; ?></a>
	                        	<span class="fr"><?php echo date('Y-m-d',$t['updatetime']) ?></span>
	                  		</li>
	                  	<?php }  } } ?>
                </ul>
            </div>
            <div class="pagemanu">
                &nbsp;<a class="pagelink_369" href="index.php?c=category&id=<?php echo $catid; ?>&page=1">首页</a>
                <a class="pagelink_369" href="index.php?c=category&id=<?php echo $catid; ?>&page=<?php echo $page-1>=1?$page-1:1 ?>">上一页</a>
                <?php
                	
                	for($i=1;$i<=$maxpage;$i++){
                		if($page == $i){
                			?>
                				<span class="pagecurrent1"><?php echo $i; ?></span>
                			<?php
                		}else{
                			?>
                				<a href="index.php?c=category&id=<?php echo $catid; ?>&page=<?php echo $i; ?>" class="pagelink_30658f"><?php echo $i; ?></a>
                			<?php
                		}
                		
                		
                		
                	}	
                ?>
                <a class="pagelink_369" href="index.php?c=category&id=<?php echo $catid; ?>&page=<?php echo $page+1 < $maxpage ? $page+1:$maxpage ?>">下一页</a>
                <a class="pagelink_369" href="index.php?c=category&id=<?php echo $catid; ?>&page=<?php echo $maxpage; ?>">尾页</a>
                <span style="PADDING:2px 5px; MARGIN: 2px; height:20px; line-height:20px; font-weight:bold;">
                <select size="1" class="pageinput1"
                        onchange="if(this.value==1){location='index.php?c=category&id=<?php echo $catid; ?>'}else{location='index.php?c=category&id=<?php echo $catid; ?>&page='+this.value+''} this.disabled='disabled'">
                        <?php
                        for($i=1;$i<=$maxpage;$i++){
	                		if($page == $i){
	                			?>
	                    			<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
	                			<?php
	                		}else{
	                			?>
	                    			<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
	                			<?php
	                		}
	                		
	                		
	                	}	
	                	?>
                </select>
	            </span>
                <span style="PADDING:2px 5px; MARGIN: 2px; height:20px; line-height:20px; font-weight:bold;">
                	共<?php echo $maxpage; ?>页
                	&nbsp;
                	<?php echo $listcount; ?>条
                </span>
            </div>
          <?php }  if ($cat['id']==78) {  $rt = $this->list_tag("action=module catid=78"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==$_GET["id"]) {  echo $content;  }  } }  } ?>
        </div>
        <div class="fr clearfix fr_box">
            <div class="fr_top_box">
                <div class="fl_topone">
                    <img src="img/pic.jpg" alt="" style="">
                    &nbsp;&nbsp;近期更新
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
                <?php if ($_GET["id"]==47) { ?>
                <a href="/index.php?c=category&id=49"><img src="<?php echo THEME_PATH; ?>img/tongzhig.jpg" alt="" style="width:260px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=56"><img src="<?php echo THEME_PATH; ?>img/hangyed.jpg" alt="" style="width:260px; height:117px; background: red"></a>
            	<?php }  if ($_GET["id"]==49) { ?>
                <a href="/index.php?c=category&id=54"><img src="<?php echo THEME_PATH; ?>img/zhuanjiag.jpg" alt="" style="width:260px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=56"><img src="<?php echo THEME_PATH; ?>img/hangyed.jpg" alt="" style="width:260px; height:117px; background: red"></a>
            	<?php }  if ($_GET["id"]==51) { ?>
                <a href="/index.php?c=category&id=59"><img src="<?php echo THEME_PATH; ?>img/xiehuih.jpg" alt="" style="width:260px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=58"><img src="<?php echo THEME_PATH; ?>img/hangyez.jpg" alt="" style="width:280px; height:117px; background: red"></a>
            	<?php }  if ($_GET["id"]==54) { ?>
               <a href="/index.php?c=category&id=49"><img src="<?php echo THEME_PATH; ?>img/tongzhig.jpg" alt="" style="width:260px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=56"><img src="<?php echo THEME_PATH; ?>img/hangyed.jpg" alt="" style="width:260px; height:117px; background: red"></a>
            	<?php }  if ($_GET["id"]==56) { ?>
                <a href="/index.php?c=category&id=59"><img src="<?php echo THEME_PATH; ?>img/xiehuih.jpg" alt="" style="width:260px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=58"><img src="<?php echo THEME_PATH; ?>img/hangyez.jpg" alt="" style="width:260px; height:117px; background: red"></a>
            	<?php }  if ($_GET["id"]==58) { ?>
                <a href="/index.php?c=category&id=54"><img src="<?php echo THEME_PATH; ?>img/zhuanjiag.jpg" alt="" style="width:260px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=56"><img src="<?php echo THEME_PATH; ?>img/hangyed.jpg" alt="" style="width:260px; height:117px; background: red"></a>
            	<?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!--链接开始-->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include);  }  if ($_GET["id"]==59) {  if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/menber.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/base.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/extra.css">
  <div class="body">
	<div class="sanjiliandong">
        <span>你现在所在的位置 ：</span>
        <a href="/index.php?c=category&id=39">首页 </a>  >
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
                &nbsp;会员申请</span>
                    <a class="fr" style="color:black;font-size:12px" href="javascript:;">更多>></a>
                </div>
                <ul>
                    <li class="clearfix">
                        <a href="" class="fl">河北省互联网协会率队参观润泽国际信息港</a>
                        <span class="fr">2014-12-02</span>
                    </li>
                    <li class="clearfix">
                        <a href="" class="fl">河北省互联网协会率队参观润泽国际信息港</a>
                        <span class="fr">2014-12-02</span>
                    </li>
                    <li class="clearfix">
                        <a href="" class="fl">河北省互联网协会率队参观润泽国际信息港</a>
                        <span class="fr">2014-12-02</span>
                    </li>
                    <li class="clearfix">
                        <a href="" class="fl">河北省互联网协会率队参观润泽国际信息港</a>
                        <span class="fr">2014-12-02</span>
                    </li>
                    <li class="clearfix">
                        <a href="" class="fl">河北省互联网协会率队参观润泽国际信息港</a>
                        <span class="fr">2014-12-02</span>
                    </li>
                    <li class="clearfix">
                        <a href="" class="fl">河北省互联网协会率队参观润泽国际信息港</a>
                        <span class="fr">2014-12-02</span>
                    </li>

                </ul>
            </div>
            <div class="mem_list3">
                <div class="fl_topone clearfix">
                    <span class="fl">
                          <img src="<?php echo THEME_PATH; ?>img/pic.jpg" alt="" style="width: 12px;height: 12px;float: left;margin-top: 9px">
                &nbsp;会员风采</span>
                    <a class="fr" style="color:black;font-size:12px" href="javascript:;">更多>></a>
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
               <?php if ($_GET["id"]==59) { ?>
                <a href="/index.php?c=category&id=49"><img src="<?php echo THEME_PATH; ?>img/tongzhig.jpg" alt="" style="width:280px; height:117px; background: red"></a>
                <a href="/index.php?c=category&id=56"><img src="<?php echo THEME_PATH; ?>img/hangyed.jpg" alt="" style="width:280px; height:117px; background: red"></a>
            	<?php } ?>
            </div>
        </div>
    </div>
    <!--链接开始-->
    </div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include);  } ?>
