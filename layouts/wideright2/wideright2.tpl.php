<div class="panel-display panel-wideright2 clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-wideright2-inside">
    <div class="panel-wideright2-left-wrapper">
      <div class="panel-wideright2-panel panel-wideright2-left">
		<?php 
		if (!empty($content['wideright2_left'])) {
			echo "<div class=\"inside\">" . $content['wideright2_left'] . "</div>";
		} ?>
      </div>
      <div class="panel-wideright2-panel panel-wideright2-left2">
		<?php 
		if (!empty($content['wideright2_left2'])) {
			echo "<div class=\"inside\">" . $content['wideright2_left2'] . "</div>";
		} ?>
      </div>
    </div>
	  <div class="panel-wideright2-panel panel-wideright2-central">
   <!--
			<?php print_r($node); ?>
	  --><div class="panel-wideright2-panel panel-wideright2-left">
       <div class="panel-wideright2-panel panel-wideright2-central-top">
       <?php 
       if (!empty($content['wideright2_central_top'])) {
         echo "<div class=\"inside\">" . $content['wideright2_central_top'] . "</div>";
       } ?>
       </div>
	      <div class="panel-wideright2-panel panel-wideright2-central-middle">
	        <div class="wideright2-cmid-left">
          <?php
    	  	if (!empty($content['wideright2_central_mid_left'])) {
	      		echo "<div class=\"inside\">" . $content['wideright2_central_mid_left'] . "</div>";
	      	} ?>
          </div>
    	    <div class="wideright2-cmid-right">
	      	<?php 
          if (!empty($content['wideright2_central_mid_right'])) {
            echo "<div class=\"inside\">" . $content['wideright2_central_mid_right'] . "</div>";
          } ?>
          </div>
        </div><!-- close panel-wideright2-central-middle -->
	       <div class="panel-wideright2-panel panel-wideright2-central-mid2">
	      	<?php 
	       if (!empty($content['wideright2_central_mid2'])) {
	         echo "<div class=\"inside\">" . $content['wideright2_central_mid2'] . "</div>";
	       } ?>
	       </div>
	       <div class="panel-wideright2-panel panel-wideright2-central-bot">
	       <?php 
	       if (!empty($content['wideright2_central_bot'])) {
	         echo "<div class=\"facebook-layer inside\">" . $content['wideright2_central_bot'] . "</div>";
	       } ?>
	       </div>
      </div> <!-- close central left column -->
    </div> <!-- close central column -->
  </div><!-- close panel-wideright2-inside -->
</div><!-- close panel-wideright2 -->
