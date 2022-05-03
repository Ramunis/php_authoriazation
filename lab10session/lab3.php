<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Ramunis Soft</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="Scripts/swfobject_modified.js"></script>
</head>
<body>
<header><h1>Lab3 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
	<h2>Задание по функциям и массивам. Вариант №4</h2>
	<section>
	<h2>Задание</h2>
	<form method="post">
	<br>Создать массив ABC прописных букв русского алфавита. Вывести массив. В качестве индекса массива присвоить ASCII код и вывести в виде таблицы из двух столбцов: в первом индекс, во втором соответствующая буква</br>	
	</td></tr><tr><td colspan="2"><center><br>
 <input type="submit" name="click" value="Запуск"></center></td></tr>
	</form>
	</section>
	<section>
	<h2>Вывод результата</h2>
	<form method="post">
	
	<table width="200" border="">
	<tbody>
  <tr>
   <th>ASCII код</th>
  </tr>
  <?  
  if (isset($_POST['click'])) // Нажатие кнопки	192-223
	{		
	$ABC = array();
	
	$i=64;
	do {
		$ABC[] = ++$i;	
	} while ($i<90);
	
	for ($x=0;$x<count($ABC);$x++)
    {	
  echo '<tr>';
  echo '<td>'.$ABC[$x].'</td>';
  echo '<tr>';
	}	
	
  echo '<tr>';
  echo '<th>Буквы</th>';
  echo '</tr>'; 
  for ($j=0;$j<count($ABC);$j++)
	{
		$ABC[$j] = chr($ABC[$j]);	
	}	
	
		
foreach($ABC as $val) {
  echo '<tr>';
  echo '<td>' . $val . '</td>';	
  echo '<tr>';
}
  
	}
?>
</tbody>
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