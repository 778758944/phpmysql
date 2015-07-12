<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-11 14:59:04
 * @version $Id$
 */
//创建pdo对象
//dsn data source name 包括主机，库，数据库信息
$dsn="mysql:host=localhost;dbname=books";
try{
	$pdo=new PDO($dsn,"root","root",array(PDO::ATTR_PERSISTENT=>1));
	//四餐可以修改pdo的一些属性
}catch(PDOException $e){//代表啥
	echo "can not connect databse ".$e->getMessage();
	exit;
}
echo "connected"."<br/>";
echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION)."<br/>";
echo $pdo->getAttribute(PDO::ATTR_PERSISTENT);
?>