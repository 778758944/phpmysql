<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-12 15:44:08
 * @version $Id$
 */

//Array ( [pic] => Array ( [name] => panda.png [type] => image/png [tmp_name] => /private/var/tmp/phpDnCL3n [error] => 0 [size] => 2861 ) )
include "init.php";
$stmt=$pdo->prepare("insert into images values (?,?,?)");
// $stmt->execute();

$stmt->bindParam(2,$_FILES["pic"]["type"]);
$fp=fopen($_FILES["pic"]["tmp_name"],"rb");
$stmt->bindParam(3,$fp,PDO::PARAM_LOB);
$num=1;
$stmt->bindParam(1,$num);
$stmt->execute();
fclose($fp);


?>