<!DOCTYPE HTML>
<?php  
	include("inc/lib.inc");
	$page="reg";
	$z="<h1>Регистрация</h1>";
    session_start();// вся процедура работает на сессиях
    global $status;
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
  <h1>Регистрация</h1>
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
  <div id="log"><?php reg();  ?></div>
</main>
<aside>
<h2>Advert</h2>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>