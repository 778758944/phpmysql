<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-28 19:32:41
 * @version $Id$
 */
session_start();
echo "<h1>member only</h1>";
if(isset($_SESSION["user"])){
	echo "<p>hello ".$_SESSION["user"]."</p>";
	echo "<p>nice to meet you</p>";
}else{
	echo "<p>go away</p>";
}
echo "<a href='home.php'>home</a>";
?>