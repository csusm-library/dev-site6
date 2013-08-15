<?php
global $user;
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; } 
if (!$status) { echo ' node-unpublished'; }
if ($node->field_sidebar1[0]['view'] || $node->field_sidebar2[0]['view']){ echo ' right-sidebar'; }
echo "\">\n";
echo "<div class=\"righty-twothirds-panel\">\n";
if ($page == 0): ?>
  <h4 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h4>
<?php endif;
echo $content;

echo "<br clear=\"all\" />";
if ($links): 
  echo "<div class=\"links\">\n"
  . $links . "\n"
  . "</div>\n";
endif; 
echo "<br clear=\"all\" />";
echo "</div>\n";
echo "</div>\n";
?>test2