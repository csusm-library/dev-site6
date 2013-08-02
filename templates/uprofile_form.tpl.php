<?php
  global $user;
echo "<div id=\"profile-edit-form\"><h2>Your Public Profile</h2>\n";
echo drupal_render($form); 
echo drupal_render($form['buttons']); 
echo "</div>\n";
?>