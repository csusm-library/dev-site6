<?php
global $user;
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; } 
if (!$status) { echo ' node-unpublished'; }
if ($node->field_sidebar1[0]['view'] || $node->field_sidebar2[0]['view']){ echo ' right-sidebar'; }
echo "\">\n";
echo $content. "\n";
if (!$user->uid && ($node->webform['roles'][0] != "1")) : 
  echo "<h4>Please login with your CSUSM account.</h4>";
	echo drupal_get_form('user_login_block');
endif;
echo "</div>\n";  // close .node
//echo "<div class=\"vote-updown-wrapper\"><div class=\"vote-updown-title\">Was this page helpful? </div>";
//echo $node->content['vud_node_widget_display']['#value'] . "</div>\n";
?>