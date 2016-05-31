{*<?php exit();?>*}

<div class="bread">
	<ol class="am-breadcrumb am-breadcrumb-slash">
		当前位置：<a href="./">{$lang.home}</a> &gt;
		{if $channel_title}-&gt;<a href="{url channel=$global.channel}">{$channel_title}</a>{/if}
		{if $cat_name}-&gt;<a href="{url channel=$global.channel cat=$global.cat}">{$cat_name}</a>{/if}
		{if $page_title}-&gt;<a href="{url channel=$global.channel id=$global.id}">{$page_title|truncate:20}</a>{/if}
	</ol>
	<div class="clear"></div>
</div>
<!-- 新秀 -->