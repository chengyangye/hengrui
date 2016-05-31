{*<?php exit();?>*}
<div class="wrap mt-10">

	<div class="link">
		<div class="title"><ul><li class="tab">{$lang.link}</li></ul></div>
		<div class="link_all">
			<ul>
				{if $img_link}
				<div class="img">
					{foreach from=$img_link name=img_link item=item}
					<li><a target="_blank" href="{$item.lin_url}" title="{$item.lin_title}"><img src="{$item.lin_img}" /></a> </li>
					{/foreach}
					<div class="clear"></div>
				</div>
				{/if}
				{if $word_link}
				<div class="word">
					{foreach from=$word_link name=word_link item=item}
					<li><a target="_blank" href="{$item.lin_url}" title="{$item.lin_title}" >{$item.lin_word}</a> </li>
					{/foreach}
				</div>
				{/if}
			</ul>
		</div>
	</div>
</div>
<!-- 新秀 -->
