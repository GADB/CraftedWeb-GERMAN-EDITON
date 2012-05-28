<div class='box_two_title'>Kennwort vergessen</div>
<?php 
account::isLoggedIn();
if (isset($_POST['forgotpw'])) 
	account::forgotPW($_POST['forgot_username'],$_POST['forgot_email']);

if(isset($_GET['code']) || isset($_GET['account'])) {
 if (!isset($_GET['code']) || !isset($_GET['account']))
	 echo "<b class='red_text'>Link-Fehler, ein oder mehrere erforderliche Daten fehlen.</b>";
 else 
 {
	 connect::selectDB('webdb');
	 $code = mysql_real_escape_string($_GET['code']); $account = mysql_real_escape_string($_GET['account']);
	 $result = mysql_query("SELECT COUNT('id') FROM password_reset WHERE code='".$code."' AND account_id='".$account."'");
	 if (mysql_result($result,0)==0)
		 echo "<b class='red_text'>Bei den angegebenen Daten entsprichen nicht die, die in der Datenbank.</b>";
	 else 
	 {
		 $newPass = RandomString();
		 echo "<b class='yellow_text'>Your new password is: ".$newPass." <br/><br/>Bitte loggen Sie sich ein und &auml;ndern sie ihr Kennwort.</b>";
		 mysql_query("DELETE FROM password_reset WHERE account_id = '".$account."'");
		 $account_name = account::getAccountName($account);
		 
		 account::changePassword($account_name,$newPass);
		 
		 $ignoreForgotForm = true;
	 }
 }
}
if (!isset($ignoreForgotForm)) { ?> 
Um Ihr Kennwort zur&uuml;ckzusetzen, geben Sie bitte Ihren Benutzernamen und die E-Mail-Adresse mit dem sich registriert haben. Eine E-Mail wird an Sie gesendet, mit einem Link um ihr Kennwort Zur&uuml;cksetzen. <br/><br/>

<form action="?p=forgotpw" method="post">
<table width="80%">
    <tr>
         <td align="right">Benutzername:</td> 
         <td><input type="text" name="forgot_username" /></td>
    </tr>
    <tr>
         <td align="right">Email:</td> 
         <td><input type="text" name="forgot_email" /></td>
    </tr>
    <tr>
         <td></td>
         <td><hr/></td>
    </tr>
    <tr>
         <td></td>
         <td><input type="submit" value="Kennwort senden!" name="forgotpw" /></td>
    </tr>
</table>
</form> <?php } ?>