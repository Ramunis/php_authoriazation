<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Ramunis Soft</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="Scripts/swfobject_modified.js"></script>
</head>
<body>
<header><h1>Lab7 B4</h1></header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
	<h2>Задания по функциям работы с файлами. Вариант №4</h2>
	<section>
	<h2>Задание</h2>
	<fieldset>
	<form method="post">
	<br>Есть форма с полем для ввода адреса почты и кнопкой отправки. Поле, в которое вводится адреса почты, заполняется пользователем и отсылается на обработку. Файл-обработчик получает ссылку, проверяет, нет ли такого адреса в файле, если нет, записывает в конец файла.</br>	
	</form method="post">
	</fieldset>
	</section>
	<section>
	<h2>Ввод результата</h2>
	<fieldset>
	<form method="post">
	<label for="sitem">Ввести e-mail:</label>
		<input type="email" name="mail">
		</td></tr><tr><td colspan="2">
 <input type="submit" name="click" value="Отправить"></center></td></tr>
	</form>
	</fieldset>
	<?
	if (isset($_POST['click'])) 
	{
		$mail = $_POST['mail'];
	    $file = "files/mails.txt";
	
		$search = $_POST['mail'];
        $lines = file('files/mails.txt');
  
        $found = false;
        foreach($lines as $line)
        {
        if(strpos($line, $search) !== false)
		{
        $found = true;
        echo $line;
		echo 'уже добавлена';
        }
		}
		if(!$found)
		{
		   $fa = fopen($file,'a+');
		       if ($fa)
			   {
				fwrite($fa,"\n");
				$test = fwrite($fa,$mail);	
					
				if ($test)
				{
				echo "Успешно добавлено";
				fclose($fa);
				}
				   else
				{
				   echo "Ошибка чтения файла";
				   fclose($fa);
				}		
				   
			   }
			   else
			   {
				  echo "Ошибка загрузки файла";
			   }			  					
		}
	}		
	?>
	</section>
</main>
<aside>
<h1>Advert</h1>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>