<!DOCTYPE HTML>
<?php
    session_start();
    date_default_timezone_set("Asia/Vladivostok");
	include("inc/lib.inc");
	$page="index";
	$z="<h1>Работа с сессиями</h1>";
	global $status;
	global $namef;
	//$status = "";
?>
<html>
<head>
    <meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
    <title>Reg</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
  <h1>Welcome to Ramunis Soft</h1>
  </header>
<nav>
	<a href="index.php" title="prod">Main</a>
	<a href="https://ramunisoft.blogspot.com/" title="prod">Products</a>
	<a href="services.html" title="serv">Services</a>
	<a href="view_tbl_users.php">Users</a>
	<a href="webapp.html" title="prod">Web App</a>
	<a href="contacts.html" title="cont">Contacts</a>
</nav>
<main>
  <h2>Company is developing applications for Windows,Android,Web platforms and making Computer Graphics.</h2>
  <section>
	  <h1>Products<?php print($namef);?></h1>
	  <dl>
		  <dt>Combinatorics:</dt>
		     <dd>1.Random Box</dd>
		  <dt>Graphics:</dt>
		     <dd>1.ChartPoint Builder</dd>
		  <dt>Logistics:</dt>
		     <dd>1.Shortest Way</dd>
	  </dl>
  <img src="images\2.PNG" width="236" height="93" alt=""/> </section>
    <section>
		<h1>Services</h1>
<table width="200" border="1">
  <tbody>
    <tr>
      <td>№</td>
      <td>Service</td>
      <td>Price</td>
	  <td>Choice</td>
      </tr>
    <tr>
      <td>1</td>
      <td>Windows App</td>
      <td>20$</td>
	  <td><input type="checkbox" name="u[0]" value="20"></td></tr>
      </tr>
	<tr>
      <td>2</td>
      <td>Cross Platform App</td>
      <td>40$</td>
	  <td><input type="checkbox" name="u[1]" value="40"></td></tr>
      </tr>
    <tr>
      <td>3</td>
      <td>Android App</td>
      <td>50$</td>
	  <td><input type="checkbox" name="u[2]" value="40"></td></tr>
      </tr>
    <tr>
      <td>4</td>
      <td>Web</td>
      <td>100$</td>
	  <td><input type="checkbox" name="u[3]" value="100"></td></tr>
      </tr>
    <tr>
      <td>5</td>
      <td>DataBase</td>
      <td>60$</td>
	  <td><input type="checkbox" name="u[4]" value="60"></td></tr>
      </tr>
    <tr>
      <td>6</td>
      <td>3D Modeling</td>
      <td>200$</td>
	  <td><input type="checkbox" name="u[5]" value="200"></td></tr>
      </tr>
    <tr>
      <td>7</td>
      <td>3D Animation</td>
      <td>100$</td>
	  <td><input type="checkbox" name="u[6]" value="100"></td></tr>
      </tr>
    <tr>
      <td>8</td>
      <td>2D Animation</td>
      <td>50$</td>
	  <td><input type="checkbox" name="u[7]" value="50"></td></tr>
      </tr>
    <tr>
      <td>9</td>
      <td>Vector Illustration</td>
      <td>20$</td>
	  <td><input type="checkbox" name="u[8]" value="20"></td></tr>
      </tr>
    <tr>
      <td>10</td>
      <td>Video Edit</td>
      <td>50$</td>
	  <td><input type="checkbox" name="u[9]" value="50"></td></tr>
      </tr>
    </tbody>
</table>
</fieldset>

	  <img src="images\1.PNG" width="320" height="216" alt=""/> </section>
</main>
<aside>
<div id="log"><?php vhod(); ?></div>
<?php
//print "<h1>Статус ".$status."</h1>";
//($status=="admin") ? menu_adm(): menu_client();
?>
</aside>
<footer>Contacts   <a href="mailto:seva.m@live.com">email</a></footer>
</body>
</html>