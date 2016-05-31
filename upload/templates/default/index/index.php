{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{$site_title}</title>

	<link href="{$S_TPL_PATH}css/app.css" rel="stylesheet" type="text/css" />
	<link href="{$S_TPL_PATH}css/huandeng.css" rel="stylesheet" type="text/css" />
	<script src="{$S_TPL_PATH}js/jquery-1.7.2.min(1).js" type="text/javascript">
	<script type="text/javascript" src="{$S_TPL_PATH}js/index.js"></script>
</head>
<body>
	{run module='header'}

		{run module='ad' id='2'}
		{run module='article_list'}
		{run module='link'}

	{run module='footer'}
</body>
</html>