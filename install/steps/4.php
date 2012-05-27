<p id="steps">Installation &raquo; Schritt 1 &raquo; Schritt 2 &raquo; Schritt 3 &raquo; <b>Schritt 4</b> &raquo; Schritt 5 &raquo; Fertig!<p>
<hr/>
<p>
	Nach scannen deines Update Ordner haben wir folgende Updates gefunden: 
    <ul>
    	<?php
			$files = scandir('sql/updates/');
			foreach($files as $value) {
				if(substr($value,-3,3)=='sql')
				{
					echo '<a href="#">'.$value.'</a><br/>';	
					$found = true;
				}
			}
		?>
    </ul>
    <?php
	if(!isset($found))
				echo '<code>Wurde kein Update in Update Ordner gefunden. <a href="?st=5">Hier Klicken um fortzufahren</a></code>';
	?>
    <i>* Tip: Clock on them to get additional information about them.</i>
</p>
<p>
Click the button below to apply all of these updates. If you do not wish to have these updates, just click <a href="?st=5">here</a>. You can install them anytime you want manually by exporting them into your database with any database software of your choise. (HeidiSQL, SQLyog, etc)
</p>
<p>
	<br/>
	<input type="submit" value="Alle Updates einspielen" onclick="step4()">
</p>