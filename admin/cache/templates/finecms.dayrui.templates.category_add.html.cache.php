<?php if ($fn_include = $this->_include("nheader.html")) include($fn_include); ?>
<script type="text/javascript">
$(function() {
	<?php if ($result) { ?>
	dr_tips('<?php echo $result; ?>');
	<?php } ?>
	dr_tid(<?php echo intval($data['tid']); ?>);
});
function dr_tid(id) {
   $('.dr_tid_0').hide();
   $('.dr_tid_1').hide();
   $('.dr_tid_2').hide();
   $('.dr_tid_'+id).show();
}
function dr_select_all() {
    $("#dr_synid").find("option").attr("selected", "selected");
}
</script>
<form class="form-horizontal" action="" method="post" id="myform" name="myform">
<input name="page" id="page" type="hidden" value="<?php echo $page; ?>" />
<input name="backurl" type="hidden" value="<?php echo $backurl; ?>" />
	<div class="page-bar">
		<ul class="page-breadcrumb mylink">
			<?php echo $menu['link']; ?>

		</ul>
		<ul class="page-breadcrumb myname">
			<?php echo $menu['name']; ?>
		</ul>
		<div class="page-toolbar">
			<div class="btn-group pull-right">
				<button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown" aria-expanded="false" data-hover="dropdown"> <?php echo fc_lang('操作菜单'); ?>
					<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right" role="menu">
					<?php if (is_array($menu['quick'])) { $count=count($menu['quick']);foreach ($menu['quick'] as $t) { ?>
					<li>
						<a href="<?php echo $t['url']; ?>"><?php echo $t['icon'];  echo $t['name']; ?></a>
					</li>
					<?php } } ?>
					<li class="divider"> </li>
					<li>
						<a href="javascript:window.location.reload();">
							<i class="icon-refresh"></i> <?php echo fc_lang('刷新页面'); ?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<h3 class="page-title">
		<small></small>
	</h3>


	<div class="portlet light bordered myfbody">
		<div class="portlet-title tabbable-line">
			<ul class="nav nav-tabs" style="float:left;">
				<li class="active">
					<a href="#tab_0" data-toggle="tab"> <i class="fa fa-cog"></i> <?php echo fc_lang('基本设置'); ?> </a>
				</li>
				<li class="">
					<a href="#tab_1" data-toggle="tab"> <i class="fa fa-cubes"></i> <?php echo fc_lang('更多设置'); ?> </a>
				</li>
				<li class="">
					<a href="#tab_2" data-toggle="tab"> <i class="fa fa-internet-explorer"></i> <?php echo fc_lang('SEO设置'); ?> </a>
				</li>
				<li class="">
					<a href="#tab_3" data-toggle="tab"> <i class="fa fa-picture-o"></i> <?php echo fc_lang('模板设置'); ?> </a>
				</li>
			</ul>
		</div>
		<div class="portlet-body">
			<div class="tab-content">

				<div class="tab-pane active" id="tab_0">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-2 control-label"><font color="red">*</font><?php echo fc_lang('栏目分类'); ?>：</label>
							<div class="col-md-9">
								<label><?php echo $select; ?></label>
							</div>
						</div>
						<div class="form-group r1">
							<label class="col-md-2 control-label" style="padding-top: 10px;"><font color="red">*</font><?php echo fc_lang('栏目类型'); ?>：</label>
							<div class="col-md-9">
								<div class="radio-list">
									<label class="radio-inline"><input type="radio" onclick="dr_tid(0)" name="data[tid]" value="0" <?php echo dr_set_radio('tid', $data['tid'], '0', TRUE); ?> /> <?php echo fc_lang('单网页'); ?></label>
									<label class="radio-inline"><input type="radio" onclick="dr_tid(1)" name="data[tid]" value="1" <?php echo dr_set_radio('tid', $data['tid'], '1'); ?> /> <?php echo fc_lang('内容模型'); ?></label>
									<label class="radio-inline"><input type="radio" onclick="dr_tid(2)" name="data[tid]" value="2" <?php echo dr_set_radio('tid', $data['tid'], '2'); ?> /> <?php echo fc_lang('外部地址'); ?></label>
								</div>
							</div>
						</div>
						<div class="form-group dr_tid_1">
							<label class="col-md-2 control-label"><font color="red">*</font><?php echo fc_lang('内容模型'); ?>：</label>
							<div class="col-md-9">
								<label>
									<select class="form-control" name="data[mid]">
										<option value=""> -- </option>
										<?php if (is_array($module)) { $count=count($module);foreach ($module as $t) { ?>
										<option value="<?php echo $t['dirname']; ?>" <?php if ($t['dirname']==$data['mid']) { ?>selected<?php } ?>> <?php echo fc_lang($t['name']); ?> </option>
										<?php } } ?>
									</select>
								</label>
								<span class="help-block"><?php echo fc_lang('当同一父级栏目下存在多个不同的模块栏目时，其父级栏目将自动转换为单页栏目'); ?></span>
							</div>
						</div>
						<?php if (!$data['id']) { ?>
						<div class="form-group r1">
							<label class="col-md-2 control-label" style="padding-top: 10px;"><?php echo fc_lang('批量添加'); ?>：</label>
							<div class="col-md-9">
								<div class="radio-list">
									<label class="radio-inline"><input type="radio" name="_all" value="0" onclick="$('.dr_more').hide();$('.dr_one').show();" checked /> <?php echo fc_lang('否'); ?></label>
									<label class="radio-inline"><input type="radio" name="_all" value="1" onclick="$('.dr_more').show();$('.dr_one').hide();" /> <?php echo fc_lang('是'); ?></label>
								</div>
							</div>
						</div>
						<div class="form-group dr_more" style="display: none">
							<label class="col-md-2 control-label"><font color="red">*</font><?php echo fc_lang('栏目列表'); ?>：</label>
							<div class="col-md-9">
								<textarea class="form-control" style="width:200px;height:150px" name="names" id="dr_names" /></textarea>
								<span class="help-block" id="dr_names_tips"><?php echo fc_lang('格式: 栏目名称|栏目目录 [回车换行]，如果不填写栏目目录时，会自动用拼音代替'); ?></span>
							</div>
						</div>
						<?php } ?>
						<div class="form-group dr_one">
							<label class="col-md-2 control-label"><font color="red">*</font><?php echo fc_lang('栏目名称'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" name="data[name]" value="<?php echo htmlspecialchars($data['name']); ?>" id="dr_name" onblur="d_topinyin('dirname','name', 1);"></label>
								<span class="help-block" id="dr_name_tips"><?php echo fc_lang('栏目的一个名称，如“国际新闻”、“饰品服装”等'); ?></span>
							</div>
						</div>
						<div class="form-group dr_one">
							<label class="col-md-2 control-label"><font color="red">*</font><?php echo fc_lang('栏目目录'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" name="data[dirname]" id="dr_dirname" value="<?php echo $data['dirname']; ?>"></label>
								<span class="help-block" id="dr_dirname_tips"><?php echo fc_lang('栏目目录确保唯一，用于url填充或者生成目录，如“china”等'); ?></span>
							</div>
						</div>
						<div class="form-group r1">
							<label class="col-md-2 control-label" style="padding-top: 10px;"><?php echo fc_lang('是否显示'); ?>：</label>
							<div class="col-md-9">
								<div class="radio-list">
									<label class="radio-inline"><input type="radio" name="data[show]" value="1" <?php echo dr_set_radio('show', $data['show'], '1', TRUE); ?> /> <?php echo fc_lang('是'); ?></label>
									<label class="radio-inline"><input type="radio" name="data[show]" value="0" <?php echo dr_set_radio('show', $data['show'], '0'); ?> /> <?php echo fc_lang('否'); ?></label>
								</div>
								<span class="help-block"><?php echo fc_lang('选择“否”时，前端循环调用不会显示'); ?></span>
							</div>
						</div>
						<div class="form-group" style="display:none">
							<label class="col-md-2 control-label" style="padding-top: 10px;"><?php echo fc_lang('允许修改'); ?>：</label>
							<div class="col-md-9">
								<div class="radio-list">
									<label class="radio-inline"><input type="radio" name="data[setting][edit]" value="0" <?php if (!$data['setting']['edit']) { ?>checked<?php } ?> /> <?php echo fc_lang('是'); ?></label>
									<label class="radio-inline"><input type="radio" name="data[setting][edit]" value="1" <?php if ($data['setting']['edit']) { ?>checked<?php } ?> /> <?php echo fc_lang('否'); ?></label>
								</div>
								<span class="help-block"><?php echo fc_lang('选择“否”时，一旦发布内容不允许修改栏目分类'); ?></span>
							</div>
						</div>
						<div class="form-group" style="display:none">
							<label class="col-md-2 control-label" style="padding-top: 10px;"><?php echo fc_lang('父栏目可发布内容'); ?>：</label>
							<div class="col-md-9">
								<div class="radio-list">
									<label class="radio-inline"><input type="radio" name="data[pcatpost]" value="1" <?php if ($data['pcatpost']) { ?>checked<?php } ?> /> <?php echo fc_lang('开启'); ?></label>
									<label class="radio-inline"><input type="radio" name="data[pcatpost]" value="0" <?php if (!$data['pcatpost']) { ?>checked<?php } ?> /> <?php echo fc_lang('关闭'); ?></label>
								</div>
								<span class="help-block"><?php echo fc_lang('开启之后父栏目具有发布权限，默认关闭（无发布权限）'); ?></span>
							</div>
						</div>
						<div class="form-group dr_tid_2">
							<label class="col-md-2 control-label"><?php echo fc_lang('转向链接'); ?>：</label>
							<div class="col-md-9">
								<input class="form-control" placeholder="http://" type="text" name="data[setting][linkurl]" value="<?php echo $data['setting']['linkurl']; ?>">
								<span class="help-block"><?php echo fc_lang('可跳转到指定地址（不允许发布内容），外链类型的栏目不允许出现子栏目'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('继承下级'); ?>：</label>
							<div class="col-md-9">
								<input type="checkbox" name="data[setting][getchild]" value="1" <?php if ($data['setting']['getchild']) { ?>checked<?php } ?> data-on-text="<?php echo fc_lang('是'); ?>" data-off-text="<?php echo fc_lang('否'); ?>" data-on-color="success" data-off-color="danger" class="make-switch" data-size="small">
								<span class="help-block"><?php echo fc_lang('选择“是”时，将下级第一个栏目数据作为当前的栏目，只对父级栏目有效'); ?></span>
							</div>
						</div>
						<?php echo $content; ?>

					</div>
				</div>
				<div class="tab-pane" id="tab_1">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('URL规则'); ?>：</label>
							<div class="col-md-9">
								<label>
								<select class="form-control" name="data[setting][urlrule]">
									<option value="0"> -- </option>
									<?php $rt_u = $this->list_tag("action=cache name=urlrule  return=u"); if ($rt_u) extract($rt_u); $count_u=count($return_u); if (is_array($return_u)) { foreach ($return_u as $key_u=>$u) {  if ($u['type']==3) { ?><option value="<?php echo $u['id']; ?>" <?php if ($u['id']==$data['setting']['urlrule']) { ?>selected<?php } ?>> <?php echo $u['name']; ?> </option><?php }  } } ?>
								</select>
								</label>
								<label class="">&nbsp;&nbsp;<a href="<?php echo dr_url('urlrule/index'); ?>" style="color:blue !important"><?php echo fc_lang('[URL规则管理]'); ?></a></label>
							</div>
						</div>

						<?php echo $thumb;  echo $field; ?>
					</div>
				</div>
				<div class="tab-pane" id="tab_2">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('内容Title'); ?>：</label>
							<div class="col-md-9">
								<div class="input-group">
									<div class="input-icon">
										<input name="data[setting][seo][show_title]" value="<?php echo $data['setting']['seo']['show_title']; ?>" class="form-control" type="text" style="padding-left:10px" >
									</div>
									<span class="input-group-btn">
										<button class="btn btn-success" onclick="dr_seo_rule()" type="button"><i class="fa fa-code"></i> <?php echo fc_lang('使用规则'); ?></button>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('列表Title'); ?>：</label>
							<div class="col-md-9">
								<div class="input-group">
									<div class="input-icon">
										<input name="data[setting][seo][list_title]" value="<?php echo $data['setting']['seo']['list_title']; ?>" class="form-control" type="text" style="padding-left:10px" >
									</div>
									<span class="input-group-btn">
										<button class="btn btn-success" onclick="dr_seo_rule()" type="button"><i class="fa fa-code"></i> <?php echo fc_lang('使用规则'); ?></button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('列表Keywords'); ?>：</label>
							<div class="col-md-9">
								<div class="input-group">
									<div class="input-icon">
										<input name="data[setting][seo][list_keywords]" value="<?php echo $data['setting']['seo']['list_keywords']; ?>" class="form-control" type="text" style="padding-left:10px" >
									</div>
									<span class="input-group-btn">
										<button class="btn btn-success" onclick="dr_seo_rule()" type="button"><i class="fa fa-code"></i> <?php echo fc_lang('使用规则'); ?></button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('列表Description'); ?>：</label>
							<div class="col-md-9">
								<div class="input-group">
									<div class="input-icon">
										<input name="data[setting][seo][list_description]" value="<?php echo $data['setting']['seo']['list_description']; ?>" class="form-control" type="text" style="padding-left:10px" >
									</div>
									<span class="input-group-btn">
										<button class="btn btn-success" onclick="dr_seo_rule()" type="button"><i class="fa fa-code"></i> <?php echo fc_lang('使用规则'); ?></button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tab_3">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('列表信息数'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" value="<?php echo $data['setting']['template']['pagesize']; ?>" name="data[setting][template][pagesize]"></label>
								<span class="help-block"><?php echo fc_lang('列表页面每页显示的信息数量'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('内容页模板'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" value="<?php echo $data['setting']['template']['show']; ?>" name="data[setting][template][show]"></label>
								<span class="help-block"><?php echo fc_lang('默认show.html'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('列表首页模板'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" value="<?php echo $data['setting']['template']['category']; ?>" name="data[setting][template][category]"></label>
								<span class="help-block"><?php echo fc_lang('默认category.html'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('列表页模板'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" value="<?php echo $data['setting']['template']['list']; ?>" name="data[setting][template][list]"></label>
								<span class="help-block"><?php echo fc_lang('默认list.html'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('搜索页模板'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" value="<?php echo $data['setting']['template']['search'] ? $data['setting']['template']['search'] : 'search.html' ?>" name="data[setting][template][search]"></label>
								<span class="help-block"><?php echo fc_lang('默认search.html'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo fc_lang('单网页模板'); ?>：</label>
							<div class="col-md-9">
								<label><input class="form-control" type="text" value="<?php echo $data['setting']['template']['page'] ? $data['setting']['template']['page'] : 'page.html' ?>" name="data[setting][template][page]"></label>
								<span class="help-block"><?php echo fc_lang('默认page.html'); ?></span>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="myfooter">
		<div class="row">
			<div class="portlet-body form">
				<div class="form-body">
					<div class="form-actions">
						<div class="row">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn green"> <i class="fa fa-save"></i> <?php echo fc_lang('保存'); ?></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php if ($fn_include = $this->_include("nfooter.html")) include($fn_include); ?>