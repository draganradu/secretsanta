<!--
//============================================================+
// Project name : Secret Santa PHP
// Version 		: 2.6 
// Begin       	: 2015-12-31
// Last Update 	: 2016-11-20
//
// Description : Secret Santa is the most popular activity around Christmas from teenage years to corporate life, and especially corporate life. The logistics of Secret Santa are a pain for the person organizing the event, because if you play with a large number of people they forget how they picked, what is the spending limit. So a large Secret Santa pool is going to degenerate in hating people around the holiday times, and lets leave the hating people part for the family reunion.
//
// Author: Radu Dragan
//
// (c) Copyright:
//               Radu Dragan
//               Fotodex.ro
//               www.fotodex.ro
//               radu.dragan@fotodex.ro
//============================================================+

/**
 * @package https://github.com/draganradu/secretsanta-PHP
 * @abstract Secret Santa PHP
 * @author Radu Dragan
 * @since 2015-12-31
 */
-->
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700italic' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<link href='css/santa.css' rel='stylesheet' type='text/css'>
</head>
</body>
<?php
	date_default_timezone_set('Europe/Bucharest');
	$date = date('m/d/Y H:i:s a', time()); 
	$an = date('Y', time());
	echo "<h1> Secret santa {$an} </h1>"; 
	echo '<div id="head">' . $date . "</div>";
?>
<div>
	<form action="print" type="get">
		<input class="input-lung" name="lista" type="text" placeholder="Past google spreadsheet published CSV">
		<input type="submit" class="input-submit" value="Tell Santa a secret">
	</form>
</div>

<a href="#b">
	<div id="footer" onclick="printeaza()">
		<img src="img/q.png">
	</div>
</a>
</body>
</html>
