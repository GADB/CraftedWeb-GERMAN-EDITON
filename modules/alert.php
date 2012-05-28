<?php

include('documents/alert.php');

if($alert_enabled == true)
{
	echo '<div id="alert"><b>Notiz:</b> ';
		echo $alert_message; 
	echo '</div>';
}

?>