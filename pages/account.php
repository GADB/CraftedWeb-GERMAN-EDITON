<?php 
account::isNotLoggedIn();
?>
<div class='box_two_title'>Mein Account</div>
<table style="width: 100%; margin-top: -15px;">
<tr>
<td><span class='blue_text'>Accountname</span></td><td> <?php echo ucfirst(strtolower($_SESSION['cw_user']));?></td>
<td><span class='blue_text'>Erstellt</span></td><td><?php echo account::getJoindate($_SESSION['cw_user']); ?></td>
</tr>
<tr>
    <td><span class='blue_text'>Emailadresse</span></td><td><?php echo account::getEmail($_SESSION['cw_user']);?></td>
    <td><span class='blue_text'>Vote Punkte</span></td><td><?php echo account::loadVP($_SESSION['cw_user']); ?></td>
</tr>
<tr>
    <td><span class='blue_text'>Account Status</span></td><td><?php echo account::checkBanStatus($_SESSION['cw_user']);?></td>
    <td><span class='blue_text'><?php echo $GLOBALS['donation']['coins_name']; ?></span></td><td><?php echo account::loadDP($_SESSION['cw_user']); ?></td>
</tr>
<br/>
</table>
 </div>
<div class='box_two'>      
      <div class='box_two_title'>Services</div>
     <div id="account_func_placeholder">
			  <div class='account_func' onclick="acct_services('character')">Character Services</div>
			  <div class='account_func' onclick="acct_services('account')">Account Services</div>        
			  <div class='account_func' onclick="acct_services('settings')">Einstellungen</div>
              
			  <div class='hidden_content' id='character'>
                 <?php if($GLOBALS['service']['unstuck']['status']=='TRUE') { ?>
                     <div class='service' onclick='redirect("?p=unstuck")'>
                     <div class='service_icon'><img src='styles/global/images/icons/character_migration.png'></div>
                     <h3>Befreien</h3>
                     <div class='service_desc'>Befreie dein Charakter.</div>
                     </div>
                 <?php } ?>
                 
                 <?php if($GLOBALS['service']['revive']['status']=='TRUE') { ?>
                     <div class='service' onclick='redirect("?p=revive")'>
                     <div class='service_icon'><img src='styles/global/images/icons/revive.png'></div>
                     <h3>Wiederbeleben</h3>
                     <div class='service_desc'>Wiederbelebe dein Charakter.</div> 
                     </div>
                 <?php } ?>
                 
                 <?php if($GLOBALS['service']['teleport']['status']=='TRUE') { ?>
                     <div class='service' onclick='redirect("?p=teleport")'>
                     <div class='service_icon'><img src='styles/global/images/icons/transfer.png'></div>
                     <h3>Teleport</h3>
                     <div class='service_desc'>Teleportiere dein Charakter.</div> 
                     </div>
                 <?php } ?>
                 
                 <?php if($GLOBALS['service']['appearance']['status']=='TRUE') { ?>
                     <div class='service' onclick='redirect("?p=service&s=appearance")'>
                     <div class='service_icon'><img src='styles/global/images/icons/appearance.png'></div>
                     <h3>Aussehen ver&auml;ndern</h3>
                     <div class='service_desc'>Passen Sie das Aussehen Ihres Charakters an (Optional: Namens&auml;nderung enthalten)</div> 
                     </div>
                 <?php } ?>
                 
                 <?php if($GLOBALS['service']['race']['status']=='TRUE') { ?>
                     <div class='service' onclick='redirect("?p=service&s=race")'>
                     <div class='service_icon'><img src='styles/global/images/icons/race_change.png'></div>
                     <h3>Rassen wechsel</h3>
                     <div class='service_desc'>&Auml;ndere die Rasse deines Charakters (innerhalb der aktuellen Fraktion)</div> 
                     </div>
                 <?php } ?>
                 
                 <?php if($GLOBALS['service']['name']['status']=='TRUE') { ?>
                     <div class='service' onclick='redirect("?p=service&s=name")'>
                     <div class='service_icon'><img src='styles/global/images/icons/name_change.png'></div>
                     <h3>Namens&auml;nderung</h3>
                     <div class='service_desc'>&Auml;ndere dein Charaktername</div> 
                     </div>
                 <?php } ?>
                 
                 <?php if($GLOBALS['service']['faction']['status']=='TRUE') { ?>
                     <div class='service' onclick='redirect("?p=service&s=faction")'>
                     <div class='service_icon'><img src='styles/global/images/icons/factions.png'></div>
                     <h3>Fraktionswechsel</h3>
                     <div class='service_desc'>&Auml;ndere die Fraktion deines Charakters (Horde zu Allianz oder Allianz zu Horde)</div> 
                     </div>
                 <?php } ?>
              </div>
              <div class='hidden_content' id='account'>
              
                     <div class='service' onclick='redirect("?p=vote")'>
                     <div class='service_icon'><img src='styles/global/images/icons/character_migration.png'></div>
                     <h3>Vote</h3>
                     <div class='service_desc'>Vote und erhalte Votepunkte.</div> 
                     </div>
                 
                     <div class='service' onclick='redirect("?p=donate")'>
                     <div class='service_icon'><img src='styles/global/images/icons/visa.png'></div>
                     <h3>Spenden</h3>
                     <div class='service_desc'>Spende und erhalte Spendenpunkte.</div> 
                     </div>
                 
                     <div class='service' onclick='redirect("?p=voteshop")'>
                     <div class='service_icon'><img src='styles/global/images/icons/raf.png'></div>
                     <h3>Vote Shop</h3>
                     <div class='service_desc'>Tauschen sie ihre Votepunkte ein!</div> 
                     </div>
                 
                     <div class='service' onclick='redirect("?p=donateshop")'>
                     <div class='service_icon'><img src='styles/global/images/icons/raf.png'></div>
                     <h3>Spenden Shop</h3>
                     <div class='service_desc'>Tauschen sie ihre Spendenpunkte ein!</div> 
                     </div>
              
              </div>
              
              <div class='hidden_content' id='settings'>
              
                     <div class='service' onclick='redirect("?p=changepass")'>
                     <div class='service_icon'><img src='styles/global/images/icons/arena.png'></div>
                     <h3>Kennwort &auml;ndern</h3>
                     <div class='service_desc'>&Auml;ndern Sie Ihre Account-Passwort.</div>
                     </div>
                 
                     <div class='service' onclick='redirect("?p=settings")'>
                     <div class='service_icon'><img src='styles/global/images/icons/ptr.png'></div>
                     <h3>E-Mail &auml;ndern</h3>
                     <div class='service_desc'>&Auml;ndern Sie die E-Mail-Adresse.</div> 
                     </div>
              
              </div>
      </div>