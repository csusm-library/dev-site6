<div class="panel-display panel-idash clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-idash-inside">
    <div id="panel-idash-left-wrapper">
      <div class="panel-idash-panel" id="panel-idash-left">
		<?php 
		if (!empty($content['idash_left'])) {
			echo "<div class=\"inside\">" . $content['idash_left'] . "</div>";
		} ?>
      </div>
      <div class="panel-idash-panel" id="panel-idash-left2">
		<?php 
		if (!empty($content['idash_left2'])) {
			echo "<div class=\"inside\">" . $content['idash_left2'] . "</div>";
		} ?>
      </div>
    </div>
    <div id="panel-idash-main-wrapper">
    <div id="panel-idash-top-wrapper">
	  <div id="panel-idash-topleft">
		<?php 
		if (!empty($content['idash_top_left'])) {
			echo "<div class=\"inside\">" . $content['idash_top_left'] . "</div>";
		} ?>
    </div>
	  <div id="panel-idash-topright">
		<?php 
		if (!empty($content['idash_top_right'])) {
			echo "<div class=\"inside\">" . $content['idash_top_right'] . "</div>";
		} ?>
    </div>
    </div>
	  <div class="panel-idash-panel" id="panel-idash-central">
	    <div class="panel-idash-panel" id="panel-idash-central-top">
       <?php 
       if (!empty($content['idash_central_top'])) {
         echo "<div class=\"inside\">" . $content['idash_central_top'] . "</div>";
       } ?>
       </div>
	     <div class="panel-idash-panel" id="panel-idash-central-middle">
	      	<?php 
          if (!empty($content['idash_central_middle'])) {
            echo "<div class=\"inside\">" . $content['idash_central_middle'] . "</div>";
          } ?>
      </div>
 	    <div class="panel-idash-panel" id="panel-idash-central-bot">
		      <?php 
	        	if (!empty($content['idash_central_bot'])) {
	       	  	echo "<div class=\"inside\">" . $content['idash_central_bot'] . "</div>";
		        } ?>
      </div>
    </div> <!-- close central column -->
    <div id="panel-idash-right-wrapper">
  	  <div class="panel-idash-panel" id="panel-idash-right">
	    	<?php 
	    	if (!empty($content['idash_right'])) {
	     		echo "<div class=\"inside\">" . $content['idash_right'] . "</div>";
	     	} ?>
      </div>
	    <div class="panel-idash-panel" id="panel-idash-right2">
	    	<?php 
	    	if (!empty($content['idash_right2'])) {
	    		echo "<div class=\"inside\">" . $content['idash_right2'] . "</div>";
	    	} ?>
      </div>
    </div>
    </div><!-- close panel-main-wrapper -->
  </div><!-- close panel-idash-inside -->
</div><!-- close panel-idash -->
