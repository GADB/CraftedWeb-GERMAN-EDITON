<?php account::isNotLoggedIn(); ?>

<div class='box_two_title'>Vote</div>

<h4 class="yellow_text">Vote Punkte: <?php echo account::loadVP($_SESSION['cw_user']); ?></h4>

<?php website::loadVotingLinks(); ?>