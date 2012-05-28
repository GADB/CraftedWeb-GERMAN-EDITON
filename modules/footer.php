<?php
if($GLOBALS['showLoadTime']==TRUE) 
{
	$end = number_format((microtime(true) - $GLOBALS['start']),2);
	echo "Seite geladen in ", $end, " sekunden. <br/>";
}
echo $GLOBALS['footer_text'];
?>