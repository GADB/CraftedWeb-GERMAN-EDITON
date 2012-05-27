<p id="steps">Installation &raquo; Schritt 1 &raquo; Schritt 2 &raquo; Schritt 3 &raquo; Schritt 4 &raquo; <b>Schritt 5</b> &raquo; Fertig!<p>
<hr/>
<table cellpadding="10" cellspacing="5">
	<tr>
    	<td>Realm ID:</td>
    	<td><input type="text" placeholder="Default: 1" id="addrealm_id"></td>
        
        <td>Realm Name:</td>
        <td><input type="text" placeholder="Default: Sample Realm" id="addrealm_name"></td>
        
        <td>MySQL Host:</td>
        <td><input type="text" placeholder="Default: 127.0.0.1" id="addrealm_m_host"></td>
     </tr>
     <tr>   
        <td>Description (Not needed):</td>
        <td><input type="text" placeholder="Default: Blizzlike 1x" id="addrealm_desc"></td>
        
        <td>Host:</td>
        <td><input type="text" placeholder="Default: 127.0.0.1" id="addrealm_host"></td>
        
        <td>MySQL Username:</td>
        <td><input type="text" placeholder="Default: root" id="addrealm_m_user"></td>
     </tr>
     <tr>   
        <td>Port:</td>
        <td><input type="text" placeholder="Default: 8085" id="addrealm_port"></td> 
        
        <td>Character Database:</td>
        <td><input type="text" placeholder="Default: characters" id="addrealm_chardb"></td>
        
        <td>MySQL Password:</td>
        <td><input type="text" placeholder="Default: ascent" id="addrealm_m_pass"></td>
     </tr>
     <tr>    
        <td>Authorized Account username:</td>
        <td><input type="text" placeholder="Default: admin" id="addrealm_a_user"></td> 
        
        <td>Authorized Account password:</td>
        <td><input type="text" placeholder="Default: adminpass" id="addrealm_a_pass"></td>        
    </tr>
    <tr>
    	<td>Remote Console:</td>
        <td>
        	<select id="addrealm_sendtype">
            	<option value="ra">RA</option>
                <option value="soap">SOAP</option>
            </select>
        </td>
        
        <td>RA Port (Ignore if you've chosen SOAP):</td>
        <td><input type="text" placeholder="Default: 3443" id="addrealm_raport"></td>
        
        <td>SOAP Port (Ignore if you've chosen RA):</td>
        <td><input type="text" placeholder="Default: 7878" id="addrealm_soapport"></td>
        
    </tr>
    <tr>
    	<td></td>
        <td><input type="submit" value="Fertigstellen!" onclick="step5()"></td>
    </tr>
</table>