<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-11 16:21:31
 * @version $Id$
 */
$dsn="mysql:host=localhost;dbname=books";
try{
	$pdo=new PDO($dsn,"root","root",array(PDO::ATTR_ERRMODE=>2));
}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}

try{
	// $pdo->exec("select * from kk");
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
	//开启事务
	$pdo->beginTransaction();
	$price=100;

	$affect_row=$pdo->exec("update demo set momey=momey-$price where id=1");
	if($affect_row){
		echo "转壮成功"."<br/>";
	}
	$affect_row2=$pdo->exec("update demo set momey=momey+$price where id=3");
	if($affect_row2){
		echo "收款成功"."<br/>";
	}else{
		throw new PDOException();
	}

	echo "交易成功";
	$pdo->commit();
}catch(PDOException $e){
	echo $e->getMessage()."<br/>";
	echo "交易失败";
	$pdo->rollback();
}
?>