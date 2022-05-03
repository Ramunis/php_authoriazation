<?php


/* Функция водключения к БД */
function conn_db()
{ 
	$conn = new mysqli('localhost', 'root', 'usbw', 'pdo_db');
}


/* Заголовок компании */
function company()
{	print "<h1>Работа с сессиями. Регистрация и аутентификация</h1>";	}

/*   Функция Вход   */
function vhod()
{ ?>
<center>
<fieldset style="width:60%; height:120px;">
<legend>Вход</legend>
<a href="log.php"><img src="images/button_vhod.png"></a>&nbsp; 
<a href="reg.php"><img src="images/button_reg.png" /></a>
</fieldset></center>
<?php }

function menu_admin()
{ ?>				
  <div class="block_nav">
  <ul class="navigation">
   <!-- Описание ссылок в меню и сами ссылки. -->
   <li><a href="index.php">&nbsp; Главная &nbsp; </a></li>
   <li><a href="cr_db.php">Создание БД</a></li>
   <li><a href="cr_tbl_users.php">Создание тбл</a></li>
   <li><a href="vvod_tbl_users.php">Ввод в тбл</a></li>
   <li><a href="view_tbl_users_adm.php">Вывод из тбл</a></li>
  </ul>
  </div>
<?php }

function menu_client()
{ ?>				
  <div class="block_nav">
  <ul class="navigation">
   <!-- Описание ссылок в меню и сами ссылки. -->
   <li><a href="index.php">&nbsp; Главная &nbsp; </a></li>
   <li><a href="view_tbl_users.php">Вывод из тбл</a></li>
  </ul>
  </div>
<?php }

function zag_s($z)
{     print $z;    }

function frm_cr() 
{
	global $PHP_SELF;
	?>
	<center>
	<form action="<?php print $PHP_SELF; ?>" method="POST">
	<fieldset style="height:105px; width:230px;">
	<legend align=center>Форма создания</legend>
	<input type="submit" value="Создать" name="ok">
	</form></fieldset>
	</center>
	<?php
}

function index()
 {
 ?>
		 <p> В данной лабораторной работе мы изучим следующие функции PHP для работы с БД: <ul type="square">
     <li><font color="blue">mysqli_connect</font>($hostname, $username, $password)- для подключение к БД;
     <li><font color="blue">mysqli_select_db</font>($dbName, $link) - для выбора БД;
     <li><font color="blue">mysqli_error()</font> - для обнаружения ошибки;
     <li><font color="blue">mysqli_query</font>($query) - для выполнения запроса; 
     
     </ul>
     <p>И научимся:<ul type="square">
     <li>создавать базы данных;
     <li>создавать таблицы;
     <li>вводить данные в таблицу;
     <li>просмотривать данные из таблицы.
     </ul>
	
  <?php
 
 }
 
function cr_db()
{
  $dbname = "pdo_db";
  frm_cr(); 
  	   if (isset($_POST['ok']))
     	{
			conn_db();
			global $conn;
			//$conn = new PDO('mysql:host=localhost;charset=utf8', 'root', 'usbw');	
			$conn = new mysqli('localhost', 'root', 'usbw');
	$sql = "CREATE DATABASE $dbname";
	print "<h2>Запрос  на создание БД: ".$sql;
	$res = $conn->exec($sql);
	if ($res)
		{ echo "<h2>БД создана</h2>"; }
    else 
    {
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "<h2>БД существует</h2>";
    }  	
   	$conn=NULL;			   
    }      
}

//***************Функции создания табл********************
//Функция для создания табл пользователей
function cr_tbl_users()
{
	$userstable="users";
	frm_cr();
	if (isset($_POST['ok']))
	{
	  //$conn = new PDO('mysql:host=localhost;dbname=pdo_db;charset=utf8', 'root', 'usbw'); 
	  $conn = new mysqli('localhost', 'root', 'usbw', 'pdo_db');
      $sql="CREATE TABLE $userstable (
        num int(4) NOT NULL AUTO_INCREMENT,
        login varchar(15) NOT NULL,
        pwd varchar(55) NOT NULL,
        status varchar(15) NOT NULL,
        f varchar(15) NOT NULL,
        i varchar(15) NOT NULL,
        dr date NOT NULL,
        sex char(1) NOT NULL,
        town varchar(15) NOT NULL,
        address varchar(55) NOT NULL,
        email varchar(55) NOT NULL,
        phone varchar(15) NOT NULL,
        pasport varchar(255),
        PRIMARY KEY (login),
        KEY num (num)
		) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;";
	print "<center><p><font color=purple>Запрос на создание табл: </font>".$sql;
	$stm  = $conn->prepare($sql); 	$stm -> execute();
	if ($stm) 
		{ echo "<h2>Таблица создана</h2>"; } 
	  else 
		{ echo "<h2>Таблица уже существует</h2>"; }
    $conn = null;
  }
}  

//***************Функции заполнения табл users********************
//Форма для заполнения табл
	function frm_vvod_tbl_user() 
{
		global $PHP_SELF		?>
		<center><form action="<?php print $PHP_SELF; ?>" method="POST">
	    <fieldset style="heiht:105px; width:250px;"><legend align=center>Форма для регистрации</legend>
    <table width="100%" >
<tr><td>Логин</td><td><input type="text" name="login" size="12" ></td></tr>
<tr><td>Пароль</td><td><input type="password" name="pwd" size="12" ></td></tr>
    <tr><td>Фамилия</td><td><input type="text" name="f" size="12"></td></tr>
	  <tr><td>Имя</td><td><input type="text" name="i" size="12"></td></tr>
	  <tr><td>Пол</td><td><input type="radio" name="sex" value="Ж"> Ж
	  	&nbsp; <input type="radio" name="sex" value="М"> М &nbsp;  &nbsp;</td></tr>
 	  <tr><td>Город</td><td><select name="town">
	  				<option value="Владивосток">Владивосток 
	  				<option value="Артем">Артем
	  				<option value="Арсеньев">Арсеньев
	  				<option value="Лазо">Лазо		
	  		    </select></td></tr>
      <tr><td>Адрес</td><td><input type="text" name="address" size="12"></td></tr>
	  <tr><td>Телефон</td><td><input type="text" name="phone" size="12"></td></tr>
	  <tr><td>Email</td><td><input type="text" name="email" size="12"></td></tr>
	  <tr><td>ДР</td><td><input type="date" name="dr" size="12"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Ввести" name="ok" class="Button"></td></tr></table> 	  
    </form>
	  	</fieldset>
		</center>
		<?php
//$page=$_POST['page'];	 
}
//Функция для заполнения табл
function reg()
{
	$userstable="users";
  	frm_vvod_tbl_user(); 
  	if (isset($_POST['ok']))
    {
	  //$conn = new PDO('mysql:host=localhost;dbname=pdo_db;charset=utf8', 'root', 'usbw'); 
	  $conn = new mysqli('localhost', 'root', 'usbw', 'pdo_db');
	  try 
      {  
		//echo  "Регистрация ".$_POST['pwd']."<br>";
		$pw=md5($_POST['pwd']);
		//echo  "MD5 ".$pw."<br>";
     	$sql="INSERT INTO $userstable (login,pwd,status,f,i,dr,sex,town,address,email,phone)
	VALUES ('$_POST[login]', '$pw', 'client', '$_POST[f]', '$_POST[i]', '$_POST[dr]', '$_POST[sex]', 
	'$_POST[town]', '$_POST[address]', '$_POST[email]', '$_POST[phone]')";
		$stm  = $conn->prepare($sql);
		$stm -> execute();	
		echo "<h4><i>Запрос на ввод данных: </i>".$sql."</h4>";
		echo "<h2>Данные введены</h2>";
	  }
      catch(PDOException $e) 
      {
	    echo $e->getMessage();    
      }  
	  $conn_pdo = NULL;
    }
 }

//***************Функции просмотра табл********************
function view_tbl_users()
{
	?>
		<center>
		<div class="block_sec">
		<table width="100%" >
		<tr height="35"><th>№</th><th>Логин</th><th>Статус</th><th>Фамилия</th><th>Имя</th><th>ДР</th><th>Пол</th><th>Город</th><th>Адрес</th><th>email</th><th>Телефон</th></tr>
	<?php
	$userstable="users";
	//$conn = new PDO('mysql:host=localhost;dbname=pdo_db;charset=utf8', 'root', 'usbw'); 
	$conn = new mysqli('localhost', 'root', 'usbw', 'pdo_db');
	$query="SELECT * FROM $userstable  ORDER BY num";  //print "$query";
  //Выполнение запроса к БД, сохраненное в переменной $result
$results = $conn->query($query);
while($row = mysqli_fetch_array($results)) {
    print '<tr height=35>';
    print '<td>'.$row["num"].'</td>';
    print '<td>'.$row["login"].'</td>';
    print '<td>'.$row["status"].'</td>';
    print '<td>'.$row["f"].'</td>';
    print '<td>'.$row["i"].'</td>';
    print '<td>'.$row["dr"].'</td>';
    print '<td>'.$row["sex"].'</td>';
    print '<td>'.$row["town"].'</td>';	
    print '<td>'.$row["address"].'</td>';
    print '<td>'.$row["email"].'</td>';
    print '<td>'.$row["phone"].'</td>';			
    print "</tr>"; 
}	
print '</table></div>';
$conn=NULL;
}

function view_tbl_users_adm()
{
	?>
		<center>
		<div class="block_sec">
		<table width="100%" >
		<tr height="35"><th>№</th><th>Логин</th><th>Пароль</th><th>Статус</th><th>Фамилия</th><th>Имя</th><th>ДР</th><th>Пол</th><th>Город</th><th>Адрес</th><th>email</th><th>Телефон</th></tr>
	<?php
	$userstable="users";
	$conn = new PDO('mysql:host=localhost;dbname=pdo_db;charset=utf8', 'root', 'usbw'); 
	$query="SELECT * FROM $userstable  ORDER BY num";  //print "$query";
  //Выполнение запроса к БД, сохраненное в переменной $result
$results = $conn->query($query);
while($row = $results->fetch()) 
{
    print '<tr height=35>';
    print '<td>'.$row["num"].'</td>';
    print '<td>'.$row["login"].'</td>';
    print '<td>'.$row["pwd"].'</td>';	
    print '<td>'.$row["status"].'</td>';
    print '<td>'.$row["f"].'</td>';
    print '<td>'.$row["i"].'</td>';
    print '<td>'.$row["dr"].'</td>';
    print '<td>'.$row["sex"].'</td>';
    print '<td>'.$row["town"].'</td>';	
    print '<td>'.$row["address"].'</td>';
    print '<td>'.$row["email"].'</td>';
    print '<td>'.$row["phone"].'</td>';			
    print "</tr>"; 
}	
print '</table></div>';
$conn=NULL;
}

//************************************Логирование******************************
function form_log()
{
    global $PHP_SELF;
    ?>
     <center><fieldset style="width:25%; height:auto;"><legend>Вход</legend>
     <form action="<?php echo $PHP_SELF; ?>" method="post">
        <center><table border="0" width="95%">
         <tr>
        	<th>Логин &nbsp;</th>
			   <td><input id="login" type="text" name="login" size="8"  class="l" /></td>
         		<td align="center" valign="middle"  rowspan="2" >
                <input type="submit" name="log_user" value="Войти"> </td>
 			</tr>
		<tr>
    <th height="20">Пароль</th>
    <td ><input id="pwd" type="password" name="pwd" size="8" class="l" /></form></td> 
			</tr></table>	</fieldset>
	<?php
	if (isset($_POST['log_user']))
	{
	//print "<font color=red>Кнопка нажата ". $_POST['log_user'];
	}
}

function log_user()
{
	global $status;
	global $namef;
	If (!$status)
		{form_log();}
    global $PHP_SELF;	
	if (isset($_POST['log_user']))
	{
         //print "Кнопка нажата ".$_POST['log_user'];		
 		 if (isset($_POST['login']))
 		  { 
 		  	$login = $_POST['login'];
			$pwd = $_POST['pwd'];
			$_SESSION['login']=$login;
			$_SESSION['pwd']=$pwd;			
            //print "<br>Логин ".$_SESSION['login'];
            //print "<br>Пароль ".$_SESSION['pwd']."<br>";			
 		  	if ($login == '') 
 		  	{ 
 		  		unset($login);
 		  	}
 		  }
			 //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
	 	if (isset($_POST['pwd'])) 
	 	{
			//echo  "<br>Пароль = ".$_POST['pwd']."<br>";
			$password = md5($pwd);
			//echo  "<br>Введенный пароль = ".$password."<br>";
				
	 		if ($password =='')
	 		 { 
	 		 	unset($password);
	 		 } 
	 	}
	}	
 		//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
		if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
 		{
 			exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
 		}
	

 	//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
 	$login = stripslashes($login);
 	$login = htmlspecialchars($login);
 	$password = stripslashes($password);
 	$password = htmlspecialchars($password);
	//удаляем лишние пробелы
	$login = trim($login);
	$password = trim($password);
	//print "Введенный пароль md5 ".$password."<br>";
	//$pwd=md5($password);
	// подключаемся к базе
	//$conn = new PDO('mysql:host=localhost;dbname=pdo_db;charset=utf8', 'root', 'usbw');
	$conn = new mysqli('localhost', 'root', 'usbw', 'pdo_db');
	$sql = "SELECT * FROM users WHERE login='".$login."'";
	print "<h4>$sql</h4>";
	//Выполнение запроса к БД, сохраненное в переменной $result
	$results = $conn->query($sql);
	# устанавливаем режим выборки
	//$results->setFetchMode(PDO::FETCH_ASSOC);  
	//извлекаем из базы все данные о пользователе с введенным логином	
	if ($row = mysqli_fetch_array($results)) 
	{
	//если существует, то сверяем пароли
	//echo "<br>Пароль из БД = ".$row['pwd']."<br>";
 if ($row['pwd']==$password) 
 {
 //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
 $_SESSION['login']=$row['login'];
 $_SESSION['id_c']=$row['num'];
 $_SESSION['name']=$row['i'];
 $_SESSION['status']=$row['status'];
 $status = $_SESSION['status'];
 $namef =$row['i'];
 login_user();
 echo  "<h4>".$_SESSION['name']." Вы успешно вошли в личный кабинет со статусом ".$_SESSION['status']."!</h4>";
 //echo "<a href='foto.php'>Добавить/изменить фото</a>"; 
 }
else {
 //если пароли не сошлись 
 exit ("<br>Извините, введённый вами login или пароль неверный.(если пароли не сошлись )");
 
 //print $status;
 	 //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь

 
}
 $conn=NULL;
 }	
}

function login_user()
{
	$today = date("H:i");   
	if ($today < '12:00') 
	{
		print "Доброе утро ". $_SESSION['name'];
	}
	else if (($today > '12:00') and ($today < '18:00'))
	{
		print "Приятного дня ". $_SESSION['name'];	
	}
	else
	{
		print "Доброго вечера ". $_SESSION['name'];		
	}

//if ($status=="client") or ($status=="admin")

}	




 
  function s()
 {
	global $page;
	  if ($page=="index")
	  {  
		index();
	  }
	  if ($page=="cr_db")
	  {
		cr_db();
	  }
	  if ($page=="cr_tbl_users")
	  {
		  cr_tbl_users();
	  } 

	  if ($page=="vvod_tbl_users")
	  {
		  reg();
	  }
	  
	  if ($page=="reg")
	  {
		  reg();
	  }
	  
	  if ($page=="log")
	  {
		  session_destroy();
		  log_user();
	  }
		if ($page=="view_tbl_users")
	  {
		  view_tbl_users();
	  }
		if ($page=="view_tbl_users_adm")
	  {
		  view_tbl_users_adm();
	  }	  
	 }
function baner()
{ print "<h2>Это боковая панель</h2>";				}
function address()
{	print "<br><h2>Лабораторная работа №10. Студент группы 214.41 Рамунис С.Ю</h2>";	}
?>
