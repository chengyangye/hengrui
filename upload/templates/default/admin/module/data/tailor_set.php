{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>免费试用</span></div>
	<div class="main">
		<form id="form_free_trial" method="post" action="{url channel=$global.channel}">
			<table class="table">
				<tr>
					<td>我想采集这个网站：</td>
					<td><input name="trial_site" type="text" class="text" />&nbsp;&nbsp;如：http://www.163.com/</td>
				</tr>
				<tr>
					<td>我想采集这些类别：</td>
					<td><input name="trial_cats" type="text" class="text" />&nbsp;&nbsp;如：娱乐、新闻、军事，请以顿号或逗号隔开</td>
				</tr>
				<tr>
					<td>采集好了通知我：</td>
					<td><input name="trial_email" type="text" class="text" />&nbsp;&nbsp;这里填邮箱</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="submit_free_trial()" value="{$lang.submit}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>免费试用说明</span></div>
	<div class="main content">
		1、信息提交后，新秀官方需要1-3小时的时间处理您的请求，您需要耐心等待；<br />
		2、采集结果会在后台“私有数据”里显示，并会发送邮件通知您，如果您的请求难以实现，新秀也会通过邮件通知您；<br />
		3、请填写以文章为主的网站，新秀目前不提供图片站、视频站的免费采集试用服务，银牌以上会员才可享有这类服务。
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>私有数据分类设置</span></div>
	<div class="main">
		<form id="form_edit_tailor_cat" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="edit_tailor_cat" />
			<table class="table sheet">
				<tr class="h">
					<td width="30%">服务器分类</td>
					<td>对应本地频道</td>
					<td>对应本地分类</td>
					<td>{$lang.operate}</td>
				</tr>
				{foreach from=$cat_setting name=cat_setting item=setting}
				{$server_id = $setting.server_id}
				<tr>
					<td>{$setting.server_name}</td>
					<td>
						<input name="varia_id[]" type="hidden" value="{$setting.varia_id}" />
						<select name="data_channel[]" onchange="get_channel_cat(this.value,'tag_{$server_id}')">
							<option value="0">{$lang.please_select}</option>
							{foreach from=$channel name=channel item=item}
							<option value="{$item.cha_id}" {if $item.cha_id == $setting.channel_id}selected="selected"{/if}>{$item.cha_name}</option>
							{/foreach}
						</select>
					</td>
					<td>
						<div id="tag_{$server_id}">
						<select name="data_cat[]">
							<option value="0">{$lang.please_select}</option>
							{foreach from=$cat_list[$server_id] name=cat_list item=item}
							<option value="{$item.cat_id}" {if $item.cat_id == $setting.cat_id}selected="selected"{/if}>{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
							{/foreach}
						</select>
						</div>
					</td>
					<td><span class="red" onClick="del('varia|{$setting.varia_id}')">[{$lang.delete}]</span></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="4">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.edit}" />
							<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='tailor_cat_add'}')" value="{$lang.add}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		1、免费试用功能仅适用于免费用户，银牌会员请联系新秀客服进行设置，以便我方为您提供更准确的采集服务；<br />
		2、免费试用功能有限，银牌会员可以获得更多更方便的服务，例如：每天自动采集自动入库、指定类别而不指定网站；<br />
		3、使用本功能可以采集任意类型的数据，你可以任意指定目标采集网站或者数据类别，每天采集数量不限；<br />
		4、“服务器分类ID”和“服务器分类名称”两项，请在成为新秀银牌会员之后联系新秀客服设置。
	</div>
</div>
{literal}
<script language="javascript">
	function submit_free_trial()
	{
		var obj = document.getElementById("form_free_trial");
		var trial_site = obj.trial_site.value;
		var trial_cats = obj.trial_cats.value;
		var trial_email = obj.trial_email.value;
		if(trial_site != '' && trial_cats != '' && trial_email != '')
		{
			ajax("post","?/deal/dir-data/","cmd=free_trial&trial_site=" + trial_site + "&trial_cats=" + trial_cats  + "&trial_email=" + trial_email,
			function(data)
			{
				if(data == 1)
				{
					alert("提交成功，请等待新秀为您采集");
				}else if(data == "in_trial"){
					alert("您已经提交了免费试用申请，请不要重复提交");
				}else{
					alert(data);
				}
			});
		}else{
			alert("采集信息不能为空");
		}
	}
</script>
{/literal}