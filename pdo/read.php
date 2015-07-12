<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-12 15:44:29
 * @version $Id$
 */
include "init.php";
$stmt=$pdo->prepare("select * from images where id=?");
$stmt->execute(array(1));
list($id,$mime,$data)=$stmt->fetch(PDO::FETCH_NUM);
header("Content-Type:".$mime);
echo $data;
?>