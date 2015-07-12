<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-12 15:39:53
 * @version $Id$
 */
$dsn="mysql:host=localhost;dbname=books";
try{
	$pdo=new PDO($dsn,"root","root",array(PDO::ATTR_ERRMODE=>2));
}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
?>