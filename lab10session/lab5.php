<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Ramunis Soft</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="Scripts/swfobject_modified.js"></script>
</head>
<body>
<header><h1>Lab5 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
<h2>Задание по классам</h2>
<section>
	<h2>Задание по функциям работы с классами. Вариант №4</h2>
	<fieldset>
	<form method="post">
	<br>В соответствии с заданным вариантом В4 создать класс, позволяющий вывести информацию об овоще: название, вкус, цвет, страна, рисунок. Выбор реализовать полем выбора. Для рисунков использовать парки. Подобрать информацию не менее 5 экземляров.</br>	
	</form>
	</fieldset>
	<h2>Ввод данных</h2>
	<fieldset>
	<form method="post">	
	<center> <select name="veges">
  <?php
  $vegs = array("Огурец","Картофель","Помидор","Перец","Кукуруза");
  Foreach ($vegs as $key => $value) 
  {
    echo "<option value=".$key.">".$value;
  }
  echo "</select>";
 // echo $_POST['veges'];
 ?>
	</td></tr><tr><td colspan="2"><center>
 <input type="submit" name="click" value="Выбрать"></center></td></tr>
	</form>
	</fieldset>
</section>
	
	<section>
	<h2>Вывод результата</h2>
	<form method="post" action=" ">
	<label for="out">Информация:</label>
	  <?php
	  global $im;
	  global $na;
	  global $ta;
	  global $col;
	  global $cou;
	  
Class vegetable
{
	private $name;
	private $tasty;
	private $color;
	private $country;
	private $image;
	public function __construct( $name, $tasty, $color, $country, $image)
	{
		$this->name = $name;
		$this->tasty = $tasty;
		$this->color = $color;
		$this->country = $country;
		$this->image = $image;
	}
	public function getveg()
	{				
	    echo 'Наименование товара: '.$this->name.'<br />';
		echo 'Вкус товара: '.$this->tasty.'<br />';
		echo 'Цвет товара: '.$this->color.'<br />';
		echo 'Страна товара: '.$this->country.'<br />';
		echo '<input type="image" name="pic" src="images/lab5/'.$this->image.'" width="180">'; 
		
		$na= $this->name;
		$ta= $this->tasty;
		$col= $this->color;
		$cou= $this->country;
		$im= $this->image;	
				
	}
	public function getname()
	{
		return $this->name;
	}
}

if (isset($_POST['click'])) // Нажатие кнопки	
	{	
	$veg1 = new vegetable('Огурец','Огуречный','Зелёный','Вьетнам','1.jpg');
	$veg2 = new vegetable('Картофель','Картофельный','Коричневый','Беларусь','2.jpg');
	$veg3 = new vegetable('Помидор','Помидорный','Красный','Турция','3.jpg');
	$veg4 = new vegetable('Перец','Острый','Красный','Мексика','4.jpg');
	$veg5 = new vegetable('Кукуруза','Сладкий','Жолтый','Кот-Дивуар','/5.jpg');
	
	if ($_POST['veges']==0) $veg1->getveg();	
	if ($_POST['veges']==1) $veg2->getveg();
	if ($_POST['veges']==2) $veg3->getveg();
	if ($_POST['veges']==3) $veg4->getveg();
	if ($_POST['veges']==4) $veg5->getveg();
	}	
	//var damp($_POST);
	//echo 
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