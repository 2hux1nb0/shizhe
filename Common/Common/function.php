<?php

	function getCtime($num){
		return date('Y/m/d H:i:s',$num);
	}

	function beforetime($num){
		$time = time()-$num;
		$hour = floor($time/3600);
		if($hour>24)
		{
			$day = floor($hour/24);
			return $day.'天前';
		}
		else if($hour>1)
		{
			return $hour.'小时前';
		}
		else{
			return '刚刚';
		}
	}

 ?>