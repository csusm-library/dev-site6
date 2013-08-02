<?php
global $user;
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; }
if (!$status) { echo ' node-unpublished'; }
echo " $page\">\n";

echo $content . "\n";
if (!$user->uid && $node->og_public == "0") :
  print drupal_get_form('user_login');
endif;
if ($links):
  echo "<div class=\"links\" style=\"margin-top:35px;\">\n"
  . $links . "\n"
  . "</div>\n";
endif;
echo "</div>\n";  // close .node
?>
