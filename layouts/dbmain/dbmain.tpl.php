<div class="panel-display panel-dbmain clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-top">
  <div class="panel-top-inside">
    <?php print $content['top']; ?>
  </div>
  </div>
<div class="panel-dbmain-inside">
  <div class="panel-panel panel-col-right">
  <div class="panel-col-right-inside">
    <div class="inside"><?php print $content['right']; ?></div>
    <div class="inside lowerright"><?php print $content['rightlower']; ?></div>
  </div>
  </div>

  <div class="panel-panel panel-col-left">
    <div class="inside">
	  	<div id="sidebar-left1">
		<?php 
		if (!empty($content['left'])) {
			echo "<div class=\"left-row\"><div class=\"title-corner\"></div>" . $content['left'] . "</div>";
		} ?>
        </div>
	  	<div id="sidebar-left2">
		<?php 
		if (!empty($content['left2'])) {
			echo "<div class=\"left-row\">" . $content['left2'] . "</div>";
		} ?>
        </div>
  	    <div id="sidebar-left3">
		<?php 
		if (!empty($content['left3'])) {
			echo "<div class=\"left-row last \">" . $content['left3'] . "</div>";
		} ?>
        </div>
    </div>
  </div>
  </div>
</div>
