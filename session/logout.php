<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-28 19:26:46
 * @version $Id$
 */
session_start();
$olduser=$_SESSION["user"];
unset($_SESSION["user"]);
session_destroy();

if(!empty($olduser)){
	echo "you log out";
}
else{
	echo "you are not login rather then log out";
}
echo "<a href='home.php'>home</a>";
?>