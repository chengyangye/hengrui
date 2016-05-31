{*<?php exit();?>*}
{if $show_sheet == 1}
	<div class="art_sheet list">
		{if $article}
			<div class="sub_content_box">
				<h1 class="content_title">
					{if $channel_title}{$channel_title}{/if}{if $cat_name}{$cat_name}{/if}{if $page_title}{$page_title}{/if}
				</h1>
				<div class="sub_content">
					<div class="list_items">
						<ul>
							{foreach from=$article name=article item=item}
								<li>
									<div class="calendar"> <span>{$item.art_add_time|date_format:"%Y"}</span> <samp><i>{$item.art_add_time|date_format:"%m-%d"}</i></samp> </div>
									<div class="news_intro">
										<h2 class="news_intro_title"><a title="{$item.art_title}" target="_blank" href="{url channel=$global.channel id=$item.art_id}">{$item.art_title}</a></h2>
										<p> {$item.art_description}</p>
										<a target="_blank" href="{url channel=$global.channel id=$item.art_id}" class="more">[查看详情]</a>
									</div>
									<div class="clear"></div>
								</li>
							{/foreach}
							<div class="clear"></div>
						</ul>
					</div>
					{include file="module/page_link.php" page=$global.page}
				</div>
			</div>
		{else}
			<div class="not_found">{$lang.not_found}</div>
		{/if}
	</div>
{else}
<div class="sub_content_box">
	<div class="sub_content">
		<div class="infos">
			<div class="title"><h1>{$article.art_title}</h1></div>
			<div class="item">{$lang.author}：<a href="./">{$article.art_author}</a>&#12288;{$lang.add_time}：{$article.art_add_time|date_format:"%Y-%m-%d %H:%M"} &#12288;
			</div>
			<div style="margin:10px 0;line-height:30px;text-indent:24px; min-height:400px;">
				{$article.art_text}
			</div>
		</div>
		<!--<div style=" text-align:center;"><br><p>（本文地址：<a href="http://www.chaoyoubi.com/xxgg/sg/1036.html">http://www.chaoyoubi.com/xxgg/sg/1036.html</a> 转载请注明出处） </p><br></div>-->
		{include file="module/prev_next.php" id=$global.id}
	</div>

</div>
{/if}
<!-- 新秀 -->
