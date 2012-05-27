<p id="steps">Installation &raquo; <b>Schritt 1</b> &raquo; Schritt 2 &raquo; Schritt 3 &raquo; Schritt 4 &raquo; Schritt 5 &raquo; Fertig!<p>
<hr/>
<table cellpadding="10" cellspacing="5">
	<tr>
    	<td>MySQL Host:</td>
        <td><input type="text" placeholder="Default: 127.0.0.1" id="step1_host"></td>
        
        <td>Realmlist:</td>
        <td><input type="text" placeholder="Default: logon.deinserver.de" id="step1_realmlist"></td>
        
        <td>Website Title:</td>
        <td><input type="text" placeholder="Default: ServerName" id="step1_title"></td>
     </tr>
     <tr>   
        <td>MySQL User:</td>
        <td><input type="text" placeholder="Default: root" id="step1_user"></td> 
        
        <td>Logon Datenbank:</td>
        <td><input type="text" placeholder="Default: auth" id="step1_logondb"></td>
        
        <td>Website Domain:</td>
        <td><input type="text" placeholder="Default: http://deinserver.de" id="step1_domain"></td>
     </tr>
     <tr>   
        <td>MySQL Passwort:</td>
        <td><input type="text" placeholder="Default: ascent" id="step1_pass"></td>  
        
        <td>World Datenbank:</td>
        <td><input type="text" placeholder="Default: world" id="step1_worlddb"></td>
        
        <td>Core Erweiterung:</td>
        <td>
        	<select id="step1_exp">
            	<option value="0">Klassic (Keine Erweiterung)</option>
                <option value="1">The Burning Crusade</option>
                <option value="2" selected>Wrath of the Lich King (TrinityCore)</option>
                <option value="3">Cataclysm (SkyfireEMU oder ArkEmu)</option>
                <option value="4">Mists of Pandaria</option>
            </select>
        </td>
     </tr>
     <tr>    
        <td>PayPal Email:</td>
        <td><input type="text" placeholder="Default: deineemail@gmail.com" id="step1_paypal"></td>  
        
        <td>Website Datenbank:</td>
        <td><input type="text" placeholder="Default: craftedweb" id="step1_webdb"></td>   
        
        <td>Default Email:</td>
        <td><input type="text" placeholder="Default: noreply@deinserver.de" id="step1_email"></td>        
    </tr>
    <tr>
    	<td></td>
        <td><input type="submit" value="Weiter zur Stufe 2" onclick="step1()"></td>
    </tr>
</table>