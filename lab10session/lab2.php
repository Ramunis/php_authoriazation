<!DOCTYPE HTML>
<?php  
    global $fx1;
    global $fx2;
	$a;
	$b;
	$c;	
	$x=mt_rand(1,100);
	
	function f1($fa,$fb,$fc,$fx)
	{
       $fx1 = $fa* ((cos($fc)*exp(-$fx))/(abs(sin($fb))*$fx));
	   return $fx1;
	}	
	
	function f2($fa,$fb,$fc,$fx)
	{
	   $fx2 = (abs(cos($fx))/($fb*pow($fa, 1/3)))*(exp(sin($fc)));
	   return $fx2;
	}
	
	if (isset($_POST['click'])) // Нажатие кнопки	
	{	
	$a=$_POST['a1'];
	$b=$_POST['b1'];
	$c=$_POST['c1'];
	
	//$fx1 = $a* ((cos($c)*exp(-$x))/(abs(sin($b))*$x));
	//$fx2 = (abs(cos($x))/($b*pow($a, 1/3)))*(exp(sin($c)));
	$fx1=f1($a,$b,$c,$x);
	$fx2=f2($a,$b,$c,$x);
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
<header><h1>Lab2 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
	<h2>Задание по математическим функциям</h2>
	<section>
	<form method="post">
	<h2>Задание</h2>
	<br>Вычислить и вывести значения функций, заданных по В4,</br>
	<img src="images\lab2\lab2f.JPG" width="320" height="216" alt=""/>
	<br>Ввод данных a,b,c производить через поля ввода на форме, x задать функцией генерации случайных чисел, как целое положительное и отрицательное число. Операции вычисления выполнять по событию нажатия кнопки. Задание, форму ввода параметров обормить в рамку(fieldset)<br>
	</form>
	</section>
	<section>
	<h2>Ввод данных</h2>
	<fieldset>
	<form method="post">
	<div>
	<tr><td> a = </td><td>
 <input type="text" name="a1" size="10">
 </td></tr>
 </div>
 <div>
 <tr><td> b = </td><td>
 <input type="text" name=" b1" size="10">
 </td></tr>
 </div>
 <div>
 <tr><td> c = </td><td>
 <input type="text" name=" c1" size="10">
 </td></tr>
 </div>
  </td></tr><tr><td colspan="2"><center>
 <input type="submit" name="click" value="Выбрать"></center></td></tr>
	</form>
	</fieldset>
	<h2>Вывод результата</h2>
	<fieldset>
	<form method="post">
	<tr><center><td> Функция F1= </td><td>
	<input type="text" name='outf1' value="<?php echo $fx1; ?>">
	</td></tr><br>
	<tr><center><td> Функция F2= </td><td>
	<input type="text" name='outf2' value="<?php echo $fx2; ?>">
	</td></tr>
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