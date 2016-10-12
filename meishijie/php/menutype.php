<?php
	$key="ace24683eaaa630c300c71cbcff742ea";
	header("Access-Control-Allow-Origin:http://apis.juhe.cn/cook/category?key=".$key);
	header('Access-Control-Allow-Methods:POST');
	$url ="http://apis.juhe.cn/cook/category?key=".$key;
	$html=file_get_contents($url);
	echo $html;	
?>