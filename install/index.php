<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CraftedWeb installation</title>

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
	<h1>Welcome to CraftedWeb!</h1>

	<div id="content">
    	<p id="steps"><b>Introduction</b> &raquo; Step 1 &raquo; Step 2 &raquo; Step 3 &raquo; Step 4 &raquo; Finished<p>
        <hr/>
        
		Welcome to the CraftedWeb installer. If you've already installed the CMS, but wish to Re-Install it, please clear your database completely and remove the configuration file.</p>
        
        <p>The installation proccess will be quick and easy, and the only thing you need is your database information! (And access to create tables, etc)</p>
        
        <p>The installation scripts will install your database, create the default configuration file, and run all updates available in the /sql/updates folder.
        </p>
        
        <p>If you would however, encounter any problems, I really hope that you <b>first</b> try to fix them on your own if you can. The page will report all errors, and some are caused on your side, not because of the developers of this installation script. If you can't, report them at the forum. </p>
        
        <p>Thanks, <br/>Anthony @ CraftedDev.</p>
        
        <p><input type="submit" value="Start the installation" onclick="window.location='install.php?st=1'"></p>
	</div>
</div>

</body>
</html>