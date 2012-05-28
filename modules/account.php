<?php if(isset($_SESSION['cw_user'])) { ?>
<div class="box_one">
<div class="box_one_title">Account Management</div>
<span style="z-index: 99;">Willkommen, <?php echo $_SESSION['cw_user']; ?>
			<?php 
			if (isset($_SESSION['cw_gmlevel']) && $_SESSION['cw_gmlevel']>=$GLOBALS['adminPanel_minlvl'] && $GLOBALS['adminPanel_enable']==true) 
				echo ' <a href="admin/">(Admin Bereich)</a>';
				
			if (isset($_SESSION['cw_gmlevel']) && $_SESSION['cw_gmlevel']>=$GLOBALS['staffPanel_minlvl'] && $GLOBALS['staffPanel_enable']==true) 
				echo ' <a href="staff/">(GM Bereich)</a>';
			?>
            </span>
			<hr/>
            <input type='button' value='Account Panel' onclick='window.location="?p=account"' class="leftbtn">
			<input type='button' value='Passwort wechseln'  onclick='window.location="?p=changepass"' class="leftbtn">
            <input type='button' value='Vote Shop' onclick='window.location="?p=voteshop"' class="leftbtn">  
			<input type='button' value='Spenden Shop'  onclick='window.location="?p=donateshop"' class="leftbtn">
            <input type='button' value='Werbt einen Freund'  onclick='window.location="?p=raf"' class="leftbtn">
            <input type='button' value='Ausloggen'  
            onclick='window.location="?p=logout&last_page=<?php echo $_SERVER["REQUEST_URI"]; ?>"' class="leftbtn">
</div>
			<?php } ?>
