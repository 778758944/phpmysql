<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-11 15:53:06
 * @version $Id$
 */

//exec()处理不带结果，返回affect_rows
//query()处理有结果集的语句 PDOStatement
$dsn="mysql:host=localhost;dbname=books";
try{
	$pdo=new PDO($dsn,"root","root",array(PDO::ATTR_ERRMODE=>2));
}
catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
try{
	$result=$pdo->query("select * from books");
}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
foreach ($result as $arr) {
	print_r($arr);
	echo "<br/>";
}
?>













