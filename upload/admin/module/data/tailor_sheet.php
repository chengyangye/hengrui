<?php
function module_tailor_sheet()
{
	global $global,$smarty;
	
	$obj = new varia();
	$obj->set_where("var_name = 'tailor_data_cat'");
	$list = $obj->get_list();
	if(count($list))
	{
		for($i = 0;$i < count($list);$i ++)
		{
			$arr = explode('|',$list[$i]['var_value']);
			$cat_list[$i]['server_id'] = $arr[0];
			$cat_list[$i]['server_name'] = $arr[1];
		}
	}else{
		$cat_list = array();
	}
	$smarty->assign('cat_list',$cat_list);
	
	$data_username = rawurlencode(get_varia('data_username'));
	$data_password = rawurlencode(get_varia('data_password'));
	
	$cat = get_global('cat');
	$page = get_global('page');
	$prefix = 'data/mod-tailor_sheet';
	
	$page_sum = 1;
	$sheet = array();
	
	if($cat)
	{
		$prefix = $prefix . '/cat-'.$cat;
	}
	$url = S_SERVER_URL . 'tailor.php?/tailor/cat-' . $cat . '/page-' . $page . '/data_username-' . $data_username . '/data_password-' . $data_password . '/index.html';
	
	$str = file_get_contents($url);
	$result = json_decode(rawurldecode($str),true);
	$server_cat_list = array();
	if(is_array($result))
	{
		if($result['error'] == 'no')
		{
			$server_cat_list = $result['cat_list'];
			$sheet = $result['sheet'];
			for($i = 0;$i < count($sheet);$i ++)
			{
				$obj = new article();
				$obj->set_where("art_title = '" . $sheet[$i]['art_title'] . "'");
				if($obj->get_count())
				{
					$sheet[$i]['is_exist'] = 1;
				}else{
					$sheet[$i]['is_exist'] = 0;
				}
			}
			$page_sum = $result['page_sum'];
		}
	}
	
	$smarty->assign('page_sum',$page_sum);
	$smarty->assign('prefix',$prefix);
	$smarty->assign('article',$sheet);
	
	$cat_list = get_local_cat();
	if(count($cat_list) < count($server_cat_list))
	{
		for($i = 0;$i < count($server_cat_list);$i ++)
		{
			$flag = false;
			for($j = 0;$j < count($cat_list);$j ++)
			{
				if($server_cat_list[$i]['cat_id'] == $cat_list[$j]['server_id'])
				{
					$flag = true;
					if($server_cat_list[$i]['cat_name'] != $cat_list[$j]['server_name'])
					{
						$val = $server_cat_list[$i]['cat_id'] . '|' . $server_cat_list[$i]['cat_name'] . '|' . $cat_list[$i]['channel_id'] . '|' . $cat_list[$i]['cat_id'];
						$obj = new varia();
						$obj->set_value('var_value',$val);
						$obj->set_where('var_id = ' . $cat_list[$i]['varia_id']);
						$obj->edit();
					}
					break;
				}
			}
			if(!$flag)
			{
				$val = $server_cat_list[$i]['cat_id'] . '|' . $server_cat_list[$i]['cat_name'] . '|0|0';
				$obj = new varia();
				$obj->set_value('var_name','tailor_data_cat');
				$obj->set_value('var_value',$val);
				$obj->add();
			}
		}
		$cat_list = get_local_cat();
	}
	$smarty->assign('cat_list',$cat_list);
}
function get_local_cat()
{
	$obj = new varia();
	$obj->set_where("var_name = 'tailor_data_cat'");
	$list = $obj->get_list();
	if(count($list))
	{
		for($i = 0;$i < count($list);$i ++)
		{
			$arr = explode('|',$list[$i]['var_value']);
			$cat_list[$i]['varia_id'] = $list[$i]['var_id'];
			$cat_list[$i]['server_id'] = $arr[0];
			$cat_list[$i]['server_name'] = $arr[1];
			$cat_list[$i]['channel_id'] = $arr[2];
			$cat_list[$i]['cat_id'] = $arr[3];
		}
	}else{
		$cat_list = array();
	}
	return $cat_list;
}
//新秀
?>