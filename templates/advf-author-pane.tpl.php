<?php
// $Id: advf-author-pane.tpl.php,v 1.1.2.11 2009/03/30 15:33:50 michellec Exp $

/**
 * @file
 * Theme implementation to display information about the post/profile author.
 *
 * See author-pane.tpl.php in Author Pane module for a full list of variables.
 */
?>

<div class="author-pane">
 <div class="author-pane-inner">
    <div class="author-pane-name-status author-pane-section">
      <div class="author-pane-line author-name"> <?php print $account_name; ?> </div>

      <?php if (!empty($picture)): ?>
        <?php print $picture; ?>
      <?php endif; ?>

      <div class="author-pane-line author-pane-online">
        <span class="author-pane-online-icon"><?php print $online_icon; ?></span>
        <span class="author-pane-online-status"><?php print $online_status; ?></span>
      </div>
    </div>


    <div class="author-pane-admin author-pane-section">
      <?php if (!empty($user_stats_ip)): ?>
        <div class="author-pane-line author-ip">
          <span class="author-pane-label"><?php print t('IP'); ?>:</span> <?php print $user_stats_ip; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($fasttoggle_block_author)): ?>
        <div class="author-fasttoggle-block"><?php print $fasttoggle_block_author; ?></div>
      <?php endif; ?>

      <?php if (!empty($troll_ban_author)): ?>
        <div class="author-pane-line author-troll-ban"><?php print $troll_ban_author; ?></div>
      <?php endif; ?>        
    </div>

    <div class="author-pane-contact author-pane-section">
      <?php if (!empty($contact)): ?>
        <div class="author-pane-icon"><?php print $contact; ?></div>
      <?php endif; ?>

      <?php if (!empty($privatemsg)): ?>
        <div class="author-pane-icon"><?php print $privatemsg; ?></div>
      <?php endif; ?>

      <?php if (!empty($buddylist)): ?>
        <div class="author-pane-icon"><?php print $buddylist; ?></div>
      <?php endif; ?>

      <?php if (!empty($user_relationships_api)): ?>
        <div class="author-pane-icon"><?php print $user_relationships_api; ?></div>
      <?php endif; ?>
      
      <?php if (!empty($flag_friend)): ?>
        <div class="author-pane-icon"><?php print $flag_friend; ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>
