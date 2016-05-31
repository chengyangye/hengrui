{*<?php exit();?>*}
{if $show_all_art != 1}
<!--<div class="wrap mt-10"><div class="index_center ">-->
	{foreach from=$best_art_cat name=best_art_cat item=cat}
		{if $smarty.foreach.best_art_cat.index % 2 == 0}<div class="wrap mt-10"><div class="index_center ">{/if}
		<div class="index_list_news l">
			<h2 class="list_news_title">{$cat.cat_name} <span>  <a href="{url channel=$cat.channel cat=$cat.cat_id}">更多</a>  </span></h2>

			<ul>
				{foreach from=$art_list[$cat.cat_id] name=art_list item=item}
				<li><a title="{$item.art_title}" target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
				{/foreach}
			</ul>

		</div>
		{if $smarty.foreach.best_art_cat.index % 2 == 1 || $smarty.foreach.best_art_cat.last}<div class="clear"></div></div></div>{/if}
	{/foreach}
<!--<div class="clear"></div></div></div>-->
{/if}
<!-- 新秀 -->
