<!DOCTYPE HTML>
<?php
    session_start();
    date_default_timezone_set("Asia/Vladivostok");
	include("inc/lib.inc");
	$page="index";
	$z="<h1>Работа с сессиями</h1>";
	global $status;
	$status = "";
?>
<html>
<head>
    <meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
    <title>Reg</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
  <h1>Просмотр пользователей</h1>
  </header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="view_tbl_users.php">Users</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
  <div id="log"><?php view_tbl_users(); ?></div>
</main>
<aside>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>