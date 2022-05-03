<header><div id="comp"><?php company() ?></div>
<div id="log"><?php vhod(); ?></div></header>
<section><?php zag_s($z); s(); ?></section>
<nav>
<?php 
if ($status=="admin")
	menu_admin();
else
	menu_client();		
?>
</nav>
<footer><?php address() ?></footer>