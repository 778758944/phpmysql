<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-11 15:22:08
 * @version $Id$
 */
$dsn="mysql:host=localhost;dbname=books";
try{
	$pdo=new PDO($dsn,"root","root");
}catch(PDOException $e){
	echo "can not connect database ".$e->getMessage();
	exit;
}
echo "connected"."<br/>";
$pdo->setAttribute(PDO::ATTR_ERRMODE,2);//开启错误提示,错误模式
try{
	$affect_row=$pdo->exec("delete from bb");
}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
// if(!$affect_row){
// 	echo $pdo->errorCode()."<br/>";
// 	print_r($pdo->errorInfo());
// }
?>