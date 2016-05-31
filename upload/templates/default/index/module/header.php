{*<?php exit();?>*}
<div id="header">
	<div class="top">
        <div class="wrap">
          <div id="top_notice">
            <ul>

              <li>欢迎访问<h1>南方文交所</h1>开户网站！</li>

            </ul>
          </div>
          <ul class="top_link">

    		<li> <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.chaoyoubi.com');" href="">设为首页</a></li>

    		<li><a href="javascript:window.external.AddFavorite('http://www.chaoyoubi.com','南方文交所-南方文交所钱币邮票交易中心开户|南方文交所钱币藏品交易中心开户')">加入收藏</a></li>

            <li><a target="_blank" href="http://www.chaoyoubi.com/sitemap.html">网站地图</a></li>

            <li><a target="_blank" href="http://www.chaoyoubi.com/rssmap.html">RSS地图</a></li>
          </ul>
          <div class="clear"></div>
        </div>
    </div>
	<div class="wrap">
        <div class="logo l"><a target="_blank" href="/"><img alt="南方文交所" src="templates/default/images/logo.png" data-bd-imgshare-binded="1"></a></div>
        <div class="clear"></div>
    </div>
    <nav>
    <div class="wrop">
    	<div id="main_nav">
    		<ul>
    			{foreach from=$nav name=nav item=item}
    			<li><a href="{$item.men_url}" {if $item.target == 1}target="_blank"{/if}>{$item.men_name}</a></li>
    			{/foreach}
    			<div class="clear"></div>
    		</ul>
    	</div>
    </div>
    </nav>
</div>

{literal}
<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		var val = obj.key.value;
		obj.action = obj.action + "/key-" + val + "/";
		obj.submit();
	}
</script>
{/literal}
<!-- 新秀 -->


