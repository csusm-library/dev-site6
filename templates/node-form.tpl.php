<?php
    $vars['form']['notifications']['notifications_content_disable']['#value'] = "1";
//print_r($form); //useful for grabbing field info
  global $user;
echo "<div id=\"profile-edit-form\"><h2>Your Public Profile</h2>\n";
$form['options']['#type'] = "";
unset($form['menu']);
unset($form['print']);
unset($form['comment']);
$form['comment_settings']['#weight'] = "100";
unset($form['book']);
unset($form['notifications']);
unset($form['notifications_team']);
echo drupal_render($form['fieldgroup_tabs']); 
echo drupal_render($form['options']); 
echo "<div id=\"user-form-extras\">\n";
echo drupal_render($form); 
echo "</div>\n";
echo drupal_render($form['buttons']); 
echo "</div>\n";
?>