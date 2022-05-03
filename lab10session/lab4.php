<!DOCTYPE HTML>
<?php
if (isset($_POST['click'])) // Нажатие кнопки	
	{	
	$s = "лето красное пропела оглянуться не успела";
	$olds=$s;
	$s=str_replace("лето","попрыгунья стрекоза лето",$s); 
	$s=str_replace("оглянуться не успела"," ",$s);
	//$s=ucwords($s);
	$s=ucfirst($s);
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
<header><h1>Lab4 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
<h2>Задание по строкам</h2>
<section>
	<h2>Задание по строковым переменным. Вариант №4</h2>
	<fieldset>
	<form method="post">
	<br>В строке «лето красное пропела оглянуться не успела» вставить в начало строки «попрыгунья стрекоза» и убрать в конце «оглянуться не успела», первую букву сделать прописной. Вывести номер варианта, задание, первоначальную строку и обработанную</br>	
	</td></tr><tr><td colspan="2"><center>
 <input type="submit" name="click" value="Запуск"></center></td></tr>
	</form>
	</fieldset>
</section>
<section>
	<h2>Вывод результата</h2>
	<fieldset>
	<form>
	
<tr><center><td> Было: </td><td>
	<input type="text" name='outs1' value="<?php echo $olds; ?>">
	</td></tr><br>
	<tr><center><td> Стало: </td><td>
	<input type="text" name='outs2' value="<?php echo $s; ?>">
	
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