<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-12 14:06:15
 * @version $Id$
 */
//php预处理
//prapare
$dsn="mysql:host=localhost;dbname=books";
try{
	$pdo=new PDO($dsn,"root","root",array(PDO::ATTR_ERRMODE=>2));
}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
try{
	//将语句放到数据库，编译后没有执行
	$stmt=$pdo->prepare("insert into demo (user,momey) values (:user,:momey)");//必加冒号
	// $stmt=$pdo->prepare("insert into demo (user,momey) values (?,?)");//必加冒号
	//绑定参数
	// $stmt->bindParam(":user",$user);//可选冒号
	// $stmt->bindParam(":momey",$momey);
	// $user="cl";
	// $momey=3500;
	//执行已经变异好的语句 
	// $stmt->execute(array(":user"=>"nike",":momey"=>2100));
	$stmt->execute($_GET);
	// $user="herry";
	// $momey=5500;
	//执行已经变异好的语句 
	// $stmt->execute();
	// $stmt->execute();
}catch(PDOException $e){
	echo $e->getMessage();
}
?>





















