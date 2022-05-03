<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Ramunis Soft</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="Scripts/swfobject_modified.js"></script>
</head>
<body>
<header><h1>Lab6 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
	<h2>Задание по дате и времени. Вариант №4</h2>
	<section>
	<h2>Задание</h2>
	<fieldset>
	<form method="post">
	<br>В текстовое поле типа date ввести дату 2014 г. Вывести количество дней и количество недель, прошедших с момента выбранной даты.</br>	
	</form method="post">
	</fieldset>
	</section>
	<section>
	<h2>Ввод результата</h2>
	<fieldset>
	<form method="post">
		<input type="date" name="bday">
		</td></tr><tr><td colspan="2">
 <input type="submit" name="click" value="Запуск"></center></td></tr>
	</form>
	</fieldset>
	<h2>Вывод результата</h2>
	<fieldset>
	<form method="post">
	<?php
	date_default_timezone_set('Asia/Vladivostok');
	//global $years;
	global $months;
	global $days;
	
if (isset($_POST['click']))// Нажатие кнопки	
	{	
	$last =  $_POST['bday'];	
	$now = date("d.m.y");  
    //$date1 = "2004-03-24";
    $diff = abs(strtotime($now) - strtotime($last));

    //$years = floor($diff / (365*60*60*24));
    //$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    //$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    $months = floor(($diff - 60*60*24) / (30*60*60*24));
    $days = floor(($diff - 60*60*24 - $months*30*60*60*24)/ (60*60*24));
	}
?>	
<h2>Прошло: <?printf("%d months, %d days\n", $months, $days);?></h2>	
	</form>
	</fieldset>
	</section>
</main>
<aside>
<h1>Advert</h1>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>