<?php
connect::selectDB('webdb');
if (!isset($_SESSION['cw_user'])) 
	$sql = "WHERE shownWhen = 'always' OR shownWhen = 'notlogged'"; 
else 
	$sql = "WHERE shownWhen = 'always' OR shownWhen = 'logged'";
			 		
 $getMenuLinks = mysql_query("SELECT * FROM site_links ".$sql." ORDER BY position ASC");
 if (mysql_num_rows($getMenuLinks)==0) 
 {
	 buildError("<b>Template fehler:</b> Keine Menu links wurden in der CraftedWeb Datenbank gefunden!",NULL);
	 echo "<br/>Kein Menu link gefunden";
 }
		 
 while($row = mysql_fetch_assoc($getMenuLinks)) 
 {
	 $curr = substr($row['url'],3);
	 if ($_GET['p']==$curr)
		 echo '<a href="'.$row['url'].'" class="current">'.$row['title'].'</a>';
	 else
		 echo '<a href="'.$row['url'].'">'.$row['title'].'</a>';
 }
?>