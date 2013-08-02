<div class="panel-display panel-dash clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-dash-inside">
    <div class="panel-dash-left-wrapper">
      <div class="panel-dash-panel panel-dash-left">
		<?php 
		if (!empty($content['dash_left'])) {
			echo "<div class=\"inside\">" . $content['dash_left'] . "</div>";
		} ?>
      </div>
      <div class="panel-dash-panel panel-dash-left2">
		<?php 
		if (!empty($content['dash_left2'])) {
			echo "<div class=\"inside\">" . $content['dash_left2'] . "</div>";
		} ?>
      </div>
    </div>
	  <div class="panel-dash-panel panel-dash-central">
	    <div class="panel-dash-panel panel-dash-central-top multisearch-tabs">
       <?php 
       if (!empty($content['dash_central_top'])) {
         echo "<div class=\"inside\">" . $content['dash_central_top'] . "</div>";
       } ?>
       </div>
	     <div class="panel-dash-panel panel-dash-central-middle">
    	    <div class="dash-cmid-right">
	      	<?php 
          if (!empty($content['dash_central_mid_right'])) {
            echo "<div class=\"inside\">" . $content['dash_central_mid_right'] . "</div>";
          } ?>
          </div>
	        <div class="dash-cmid-left">
          <?php
    	  	if (!empty($content['dash_central_mid_left'])) {
	      		echo "<div class=\"inside\">" . $content['dash_central_mid_left'] . "</div>";
	      	} ?>
          </div>
      </div>
	    <div class="panel-dash-panel panel-dash-central-mid2">
	  	<?php 
	  	if (!empty($content['dash_central_mid2'])) {
	  		echo "<div class=\"inside\">" . $content['dash_central_mid2'] . "</div>";
	  	} ?>
      </div>
	    <div class="panel-dash-panel panel-dash-central-bot">
		  <?php 
	  	if (!empty($content['dash_central_bot'])) {
		  	echo "<div class=\"facebook-layer inside\">" . $content['dash_central_bot'] . "</div>";
		  } ?>
      </div>
    </div> <!-- close central column -->
	  <div class="panel-dash-panel panel-dash-right">
	  	<?php 
	  	if (!empty($content['dash_right'])) {
	  		echo "<div class=\"inside\">" . $content['dash_right'] . "</div>";
	  	} ?>
    </div>
  </div><!-- close panel-dash-inside -->
</div><!-- close panel-dash -->
