<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Ramunis Soft</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="Scripts/swfobject_modified.js"></script>
</head>
<body>
<header><h1>Lab8 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
	<h2>Задания по функциям и массивам. Вариант №4</h2>
	<section>
	<h2>Задание</h2>
	<fieldset>
	<form method="post">
	<br>Дан целочисленный массив из n элементов. Элементы задать генерацией случайных чисел от 0 до 25. Вычислить разность максимального элемента среди элементов, имеющих четные значения, и максимального среди элементов, имеющих нечетные значения.</br>	
	</form method="post">
	</fieldset>
	<h2>Ввод результата</h2>
	<fieldset>
	<form method="post">
	<label for="sitem">Кол.эл. n:</label>
		<input type="text" name="nn">
		</td></tr><tr><td colspan="2">
 <input type="submit" name="click" value="Ввести"></center></td></tr>
	</form>
	</fieldset>
	</section>

	<section>
	<h2>Вывод результата</h2>
	<form method="post">
<table border=1>
  <tr>
   <th>Индексы</th>
   <th>Элементы</th>
  </tr>	
    <?	
	if (isset($_POST['click']))// Нажатие кнопки	
	{	
	$n=$_POST['nn'];
	$ar=array();
	$ar1=array();
	$ar2=array();
	for ($i=0;$i<=$n;$i++)
	{
		echo '<tr>';
		$ar[$i]=mt_rand(0,25);	
        echo '<td>'.$i.'</td>';		
        echo '<td>'.$ar[$i].'</td>';		
        echo '</tr>';	
        if (($ar[$i]%2)==0)	
		{
			$ar1[$i]=$ar[$i];			
		}
		else
		{
			$ar2[$i]=$ar[$i];
		} 		
	}	
	
	$dif = max($ar1)-max($ar2);
    echo '<h1>';	
	echo 'Разность MAX эл = ';
    echo $dif;
    echo '</h1>';			
	}	
	?>
</table>
	</form>
	</section>
</main>
<aside>
<h1>Advert</h1>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>