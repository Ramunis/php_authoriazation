<!DOCTYPE HTML>
<?php
  include("inc/lib.inc");
  $dbinfo = require 'dbinfo.php';
  date_default_timezone_set('Asia/Vladivostok');
  
  
  function show()
	{
		print "<center><table width=95% cellspacing=1 bordercolor=coral border=1 bgcolor=gold>";
		print "<tr><th>№</th><th>ДЗ</th><th>Груз</th><th>Клиент</th><th>Станция</th><th>Цена</th>";
		print "<th>Вагон</th><th>Оплата</th></tr>";
		
		$dbinfo = require 'dbinfo.php';
		
		$db = new DB;
		
		$user=$db->getAll('cargo');
		
		for ($i=0; ($i<=count($user)-1);$i++)
		{
			print '<tr>';
			print '<td>'.$user[$i]['n'].'</td>';
			print '<td>'.$user[$i]['dz'].'</td>';
		    print '<td>'.$user[$i]['carg'].'</td>';
			print '<td>'.$user[$i]['client'].'</td>';
			print '<td>'.$user[$i]['station'].'</td>';
			print '<td>'.$user[$i]['price'].'</td>';
			print '<td>'.$user[$i]['car'].'</td>';
			print '<td>'.$user[$i]['pay'].'</td>';
			print '</tr>';
		}
		print "</table>";
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>Ramunis Soft</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="Scripts/swfobject_modified.js"></script>
</head>
<body>
<header><h1>Lab9 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
	<h2>Задание по работе с базой данных MySQL. Вариант №4</h2>
	<fieldset>
	<form method="post">
	<br>В соответствии с заданным вариантом В4 создать форму для ввода в базу данных.</br>	
	</form>
	</fieldset>
	
	<h2>Ввод в базу данных</h2>
	<section>
	
	<form method="post" action=" ">
	<label for="out">Информация:</label>
	
	<label for="out">ДЗ:</label>
	<input type="date" name='dz'>
	<label for="out">Груз:</label>
	<input type="text" name='carg'>
	<label for="out">Клиент:</label>
	<input type="text" name='client'>
	<label for="out">Станция:</label>
	<input type="text" name='station'>	
	
	<label for="out">Цена:</label>
	<input type="text" name='price'>
	<label for="out">Вагон:</label>
	<input type="text" name='car'>
	<label for="out">Оплата:</label>
	<input type="text" name='pay'>
    <input type="submit" name="click" value="Ввести">
	
	<?php
	if (isset($_POST['click'])) // Нажатие кнопки	
	{
    
    $dbinfo = require 'dbinfo.php';
		
    $db = new DB;
		
	//$user=$db->insert("INSERT INTO cargo(dz,carg,client,station,price,car,pay) VALUES ('2020-05-20','Xbox 360','A11','SeaPort',1000000,'A1800','41001642972339');");
	$user=$db->insert("INSERT INTO cargo(dz,carg,client,station,price,car,pay) VALUES ('$_POST[dz]','$_POST[carg]','$_POST[client]','$_POST[station]','$_POST[price]','$_POST[car]','$_POST[pay]');");		
	
	show();
	}		
    ?>
  
	</form>
	</section>
</main>
<aside>
<h1>Advert</h1>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>