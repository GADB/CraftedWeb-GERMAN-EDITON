<?php
     website::getNews();
	 
	 if ($GLOBALS['enableSlideShow']==false && $GLOBALS['news']['enable']==false)  
	 {
		 buildError("<b>Fehler in der Konfigurationsdatei.</b>Weder die Diashow oder die Nachricht werden angezeigt, die Homepage wird leer sein");
		 echo "Die Homepage wird leer sein";
	 }
?>
