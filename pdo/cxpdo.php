<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-12 15:14:49
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
	$stmt=$pdo->prepare("select * from demo where id>?");
	$stmt->execute(array(9));
	$stmt->setFetchMode(PDO::FETCH_NUM);//结果返回的模式
	echo "<pre>";
	print_r($stmt->fetchAll());//整表获取
	echo "</pre>";
	// echo "<table border=1>";
	// while(list($id,$user,$momey)=$stmt->fetch(PDO::FETCH_NUM)){
	// 	echo "<tr>";
	// 	echo "<td>$id</td>";
	// 	echo "<td>$user</td>";
	// 	echo "<td>$momey</td>";
	// 	echo "</tr>";
	// };
	// echo "</table>";

}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
?>