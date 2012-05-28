<?php account::isNotLoggedIn(); ?>
<div class='box_two_title'>Werbe einen Freund</div>
<b class='yellow_text'>Dein werbe Link: </b> <div id="raf_box">
                  <?php echo $GLOBALS['website_domain']."?p=register&id=".account::getAccountID($_SESSION['cw_user']); ?>
</div><br/>
<h4 class='blue_text'>Wie funktioniert das?</h4>

Es ist ganz einfach! Kopieren Sie einfach den Link oben und senden Sie es an Ihre Freunde. Wenn ihr Freund ein Konto mit Ihrem Referral-Link erstellt, k&ouml;nnen Sie zwei in Azeroth schneller Leveln,mehr Ruf erlangen und mehr!