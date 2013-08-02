<div class="panel-display panel-media clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-media-inside">
    <div class="panel-media-left-wrapper">
      <div class="panel-media-panel panel-media-left">
		<?php 
		if (!empty($content['media_left'])) {
			echo "<div class=\"inside\">" . $content['media_left'] . "</div>";
		} ?>
      </div>
      <div class="panel-media-panel panel-media-left2">
		<?php 
		if (!empty($content['media_left2'])) {
			echo "<div class=\"inside\">" . $content['media_left2'] . "</div>";
		} ?>
      </div>
    </div>
	  <div class="panel-media-panel panel-media-central">
   <!--
			<?php print_r($node); ?>
	  --><div class="panel-media-panel panel-media-left">
       <div class="panel-media-panel panel-media-central-top">
       <?php 
       if (!empty($content['media_central_top'])) {
         echo "<div class=\"inside\">" . $content['media_central_top'] . "</div>";
       } ?>
       </div>
	      <div class="panel-media-panel panel-media-central-middle">
	        <div class="media-cmid-left">
          <?php
    	  	if (!empty($content['media_central_mid_left'])) {
	      		echo "<div class=\"inside\">" . $content['media_central_mid_left'] . "</div>";
	      	} ?>
          </div>
    	    <div class="media-cmid-right">
	      	<?php 
          if (!empty($content['media_central_mid_right'])) {
            echo "<div class=\"inside\">" . $content['media_central_mid_right'] . "</div>";
          } ?>
          </div>
        </div><!-- close panel-media-central-middle -->
	       <div class="panel-media-panel panel-media-central-mid2">
	      	<?php 
	       if (!empty($content['media_central_mid2'])) {
	         echo "<div class=\"inside\">" . $content['media_central_mid2'] . "</div>";
	       } ?>
	       </div>
	       <div class="panel-media-panel panel-media-central-bot">
	       <?php 
	       if (!empty($content['media_central_bot'])) {
	         echo "<div class=\"facebook-layer inside\">" . $content['media_central_bot'] . "</div>";
	       } ?>
	       </div>
      </div> <!-- close central left column -->
    </div> <!-- close central column -->
  </div><!-- close panel-media-inside -->
</div><!-- close panel-media -->
