<?php
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; } 
if (!$status) { echo ' node-unpublished'; }
echo "\" style=\"width:100%;min-width:550px;\">\n";
echo str_replace("src=\"/sites/lib.csusm.edu/files","src=\"https://lib.csusm.edu/sites/lib.csusm.edu/files",$node->content['field_coding']['field']['#children']) . "\n";
echo "</div>\n";  // close .node
echo "<br clear=\"all\" />"; 
?>