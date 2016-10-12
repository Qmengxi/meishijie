<?php
	$data =$_POST['data'];
	$key="ace24683eaaa630c300c71cbcff742ea";
	header("Access-Control-Allow-Origin:http://apis.juhe.cn/cook/query?key=".$key."&".$data);
	header('Access-Control-Allow-Methods:POST');
	$url ="http://apis.juhe.cn/cook/query?key=".$key."&".$data;
	$html=file_get_contents($url);
	echo $html;	
?>