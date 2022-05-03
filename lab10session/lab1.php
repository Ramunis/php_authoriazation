<!DOCTYPE HTML>
<?php
    
    date_default_timezone_set("Asia/Vladivostok");
	
	$rn=array(0,1,2,3,4,5,6,7,8,9,10);
	$ri=array(null,'1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg');
	$rp=array(null,500,800,1200,1800,2200,2500,3000,4000,4500,5000);
	$rd=array(null,'2021-01-01','2021-01-04','2021-01-10','2021-01-15','2021-01-20','2021-02-01','2021-02-05','2021-02-09','2021-02-14','2021-02-18');
	
	if (isset($_POST['q']))
	{
	$query=$_POST['q'];
	}
	//echo "<input type='text' name='a' value='".$rn[$query]."'>";
	//echo "<input type='text' name='b' value='".$rp[$query]."'>";
	//echo "<input type='text' name='c' value='".$rd[$query]."'>";
?>
<html>
<head>
<meta charset="utf-8">
<title>Ramunis Soft</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="Scripts/swfobject_modified.js"></script>
</head>
<body>
<header><h1>Lab1 B23</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
	<h1>Каталог кроликов</h1>
	<article>
	<form method="post">
	<label for="site-search">Ввести № кролика:</label>
    <input type="search" id="site-search" name="q" aria-label="Search through site content">
	<button>Search</button>
	<label for="out">Информация:</label>
	<input type="image" name="p" src="images/lab1/<?php echo $ri[$query]; ?>" width="180">
	<label for="out">Номер:</label>
	<input type="text" name='a' value="<?php echo $rn[$query]; ?>">
	<label for="out">Цена:</label>
	<input type="number" name='b' value="<?php echo $rp[$query]; ?>">
	<label for="out">Дата сделки:</label>
	<input type="date" name='c' value="<?php echo $rd[$query]; ?>">
	</form>
	</article>
</main>
<aside>
<h2>Advert</h2>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>