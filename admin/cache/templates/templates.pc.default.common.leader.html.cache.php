<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/extra.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/xh_leader.css">
<div class="body">
	  <div class="sanjiliandong">
        <span>你现在所在的位置 ：</span>
        <a href="/index.php?c=category&id=39">首页</a> >
        <span><?php echo $cat["name"]; ?></span>
        <span> </span>
    </div>
 <div class="container">
        <div class="fl clearfix fl_box fl_body">
            <div class="fl_top">
                <img src="img/pic.jpg" alt="" style="width: 12px;height: 12px;float: left;margin-top: 9px">
                &nbsp;服务大厅</div>
            <div class="fl_list">
                <ul>
                	<?php $rt = $this->list_tag("action=category pid=65"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <li class="clearfix one-txt-cut ">
                        <a class="fl" href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a>
                    </li>
                    <?php } } ?>

                </ul>
            </div>
        </div>
        <div class="fr clearfix fr_box fr_body">
            <div class="fr_top_box">
                <div class="fl_topone">
                    <img src="<?php echo THEME_PATH; ?>img/pic.jpg" alt="" style="">
                    &nbsp;&nbsp;<?php echo $cat['name']; ?>
                </div>
                <?php if ($_GET["id"]==66) { ?>
                <div class="fl_list">
                    <ul>
                    	<?php $rt = $this->list_tag("action=module catid=66 order=name3_asc"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['name3']==2) { ?>
                    		<li class="one-txt-cut" style="display:inline-block;margin-right: 20px;">
                    			<?php if ($t['title']=='汤帅') { ?>
                        	<p  style='color: black;font-family: "宋体";margin-bottom:15px;font-size: 16px;font-weight: 800;'><?php echo $t['name2']; ?></p>
                            <?php }  if ($t['title']!='汤帅') { ?>
                        	<p  style='color: black;font-family: "宋体";margin-bottom:15px;font-size: 16px;font-weight: 800;'></p>
                            <?php } ?>
                            <a href="<?php echo $t['url'].'&pid=66'; ?>" style="color: #666;font-weight: 100;font-size: 14px;display: block; "><?php echo $t['title']; ?></a>
                        </li>
                    	<?php }  if ($t['name3']!=2) { ?>
                        <li class="one-txt-cut">
                        	<p  style='color: black;font-family: "宋体";margin-bottom:10px;font-size: 16px;font-weight: 800;'><?php echo $t['name2']; ?></p>
                            <a href="<?php echo $t['url'].'&pid=66'; ?>" style="color: #666;font-weight: 100;font-size: 14px;"><?php echo $t['title']; ?></a>
                        </li>
                        <?php }  } } ?>
                    </ul>
                </div>
            	<?php } ?>
            </div>
        </div>
    </div>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
