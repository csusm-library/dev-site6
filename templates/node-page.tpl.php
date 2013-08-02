<?php
global $user;
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; } 
if (!$status) { echo ' node-unpublished'; }
if ($node->field_sidebar1[0]['view'] || $node->field_sidebar2[0]['view']){ echo ' right-sidebar'; }
echo "\">\n";
if ($node->field_spc_image[0]['view'] != ""){
  echo $node->field_spc_image[0]['view'] . "\n";
}
echo $node->content['body']['#value'] . "\n";
echo "</div>\n";  // close .node
echo "<br clear=\"all\" />"; 
echo str_replace("biblio.csusm.edu//webfm_send","lib.csusm.edu/webfm_send",$node->content['webfm_attachments']['#value']) . "\n";
if (!$user->uid && $node->og_public == "0") : 
  print drupal_get_form('user_login');
endif;
if ($links): 
  echo "<div class=\"links\" style=\"margin-top:35px;\">\n"
  . $links . "\n"
  . "</div>\n";
endif; 
//echo "<div class=\"vote-updown-wrapper\"><div class=\"vote-updown-title\">Was this page helpful? </div>";
//echo $node->content['vud_node_widget_display']['#value'] . "</div>\n";
//print theme('sexybookmarks', $node);
?>
