<?php

	//防止显示到浏览器时乱码
	header('Content-Type:text/html; charset=utf-8;');

	require_once 'database.php';

	$db = new database();

	$table = 'user';
	$field = 'email, phone';
	$keys = array('name'=>'徐兆成');

	$result = $db->select_data($table,$field,$keys);

	if($result != null){
		var_dump($result);
	}else {

		$values = array('name'=>'徐兆成','password'=>'123456',
			'email'=>'997962520@qq.com','phone'=>'13240329901','location'=>'北京航空航天大学');

		$db->insert_to_db($table,$values);
		echo '插入成功';
	}

?>