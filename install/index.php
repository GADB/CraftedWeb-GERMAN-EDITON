<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Willkommen bei CraftedWeb installation</title>

	<style type="text/css">

	::selection{ background-color: #06C; color: #fff; }
	::moz-selection{ background-color: #06C; color: #fff; }
	::webkit-selection{ background-color: #06C; color: #fff; }

	body { background-color: #fff; margin: 40px; font: 13px/20px normal Helvetica, Arial, sans-serif; color: #4F5155;}

	a {color: #003399;background-color: transparent;font-weight: normal;}

	h1 {color: #444;background-color: transparent;border-bottom: 1px solid #D0D0D0;font-size: 19px;font-weight: normal;margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;}

	code {font-family: Consolas, Monaco, Courier New, Courier, monospace;font-size: 12px;background-color: #f9f9f9;border: 1px solid #D0D0D0;
		color: #002166;display: block;margin: 14px 0 14px 0;padding: 12px 10px 12px 10px;}

	#content{margin: 0 15px 0 15px;}
	
	#main_box{margin: 50px;border: 1px solid #D0D0D0;-webkit-box-shadow: 0 0 8px #D0D0D0;}
	
	hr { border-top: 1px solid #D0D0D0; border-bottom: none; border-left: none; border-right: none; }
	
	#steps { font-size: 11px; }
	
	input[type="submit"] { height: 32px; border:none; background-color: #f9f9f9;
		padding-bottom: 5px; padding-left: 18px;  padding-right: 18px; cursor:pointer; -moz-border-radius: 1px; border-radius: 1px;        
		padding-top: 2px; top: -4px; border: 1px solid #ccc;
		font-family: 'Calibri', 'newCalibri', 'Arial'; color:#666666;  }
	input[type="submit"]:hover { background-color:#fff; }
	</style>
</head>
<body>

<div id="main_box">
	<h1>Willkommen bei CraftedWeb!</h1>

	<div id="content">
    	<p id="steps"><b>Installation</b> &raquo; Stufe 1 &raquo; Stufe 2 &raquo; Stufe 3 &raquo; Stufe 4 &raquo; Finished<p>
        <hr/>
        
		Willkommen beim CraftedWeb installer. Du hast bereits das CMS installiert und w&uuml;nscht ein Reinstall? Bitte l&ouml;sch alle Tabellen aus deiner Datenbank.</p>
        
        <p>Die Installation ist schnell einfach und unkompliezirt. Du ben&ouml;tigst nur deine Datenbank Daten (Account brauch rechte um tabellen zu erstellen und editieren)</p>
        
        <p>Das Installtions script erstell eine Datenbank, sowie auch eine Grund Configurations File. Alle Update SQL Files von /sql/updates Ordner werden automatisch mit eingef&uuml;gt.
        </p>
        
        <p>Wenn ihr Probleme habt oder Fehler entdeckt habt meldet bitte diese per Github oder in CraftWeb Forum (AC-Web.org). CraftWeb ist nicht f&uumlr die Übersetzung verantwortlich, Probleme oder weiter Übersetzungen bitte per Github bei GADB melden. </p>
        
        <p>Thanks, <br/>Anthony @ CraftedDev and GADB (German Edition).</p>
        
        <p><input type="submit" value="Start the installation" onclick="window.location='install.php?st=1'"></p>
	</div>
</div>

</body>
</html>