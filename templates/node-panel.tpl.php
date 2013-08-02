<?php
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; } 
if (!$status) { echo ' node-unpublished'; }
echo "\">\n";
$teaser = TRUE;
$page = FALSE;
$nid = $node->nid;
$nodeteaser = node_build_content(node_load(array('nid' => $nid)), $teaser, $page);
$nodeteaser->teaser = drupal_render($nodeteaser->content);
echo "<div class=\"panel-node-teaser\">$nodeteaser->teaser</div>";
echo str_replace("http://biblio.csusm.edu/sites/biblio.csusm.edu/files/sites","http://lib.csusm.edu/sites",$content);
echo "<br clear=\"all\" />";
//echo "<div class=\"vote-updown-wrapper\"><div class=\"vote-updown-title\">Was this page helpful? </div>";
//echo $node->content['vud_node_widget_display']['#value'] . "</div>\n";
echo str_replace("/webfm_send","https://lib.csusm.edu/webfm_send",$node->content['webfm_attachments']['#value']) . "\n";
echo "<br clear=\"all\" />";

if ($links): 
  echo "<div class=\"links\">\n"
  . $links . "\n"
  . "</div>\n";
endif; 
echo "<br clear=\"all\" />";
echo "</div>\n";?>