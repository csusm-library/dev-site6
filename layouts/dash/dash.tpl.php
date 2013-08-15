<div class="row-fluid panel-display panel-dash" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="span8 panel-dash-panel panel-dash-central" id="main-content">
    <div class="row-fluid panel-dash-panel panel-dash-central-top multisearch-tabs">
      <?php
      if (!empty($content['dash_central_top'])) {
        echo "<div class=\"inside\">" . $content['dash_central_top'] . "</div>";
      } ?>
    </div>
    <div class="row-fluid panel-dash-panel panel-dash-central-middle">
    <div class="span6 dash-cmid-left">
      <?php
      if (!empty($content['dash_central_mid_left'])) {
        echo "<div class=\"inside\">" . $content['dash_central_mid_left'] . "</div>";
      } ?>
    </div>
    <div class="span6 dash-cmid-right">
        <?php
        if (!empty($content['dash_central_mid_right'])) {
          echo "<div class=\"inside\">" . $content['dash_central_mid_right'] . "</div>";
        } ?>
      </div>
    </div>

    <div class="row-fluid panel-dash-panel panel-dash-central-mid2">
      <div class="span5">
        <?php
        if (!empty($content['dash_central_mid2'])) {
          echo "<div class=\"inside\">" . $content['dash_central_mid2'] . "</div>";
        } ?>
      </div>
    </div>
    <div class="row-fluid panel-dash-panel panel-dash-central-bot">
      <div class="span5">
        <?php
        if (!empty($content['dash_central_bot'])) {
          echo "<div class=\"facebook-layer inside\">" . $content['dash_central_bot'] . "</div>";
        } ?>
      </div>
    </div>
  </div> <!-- close panel-dash-central -->
  <div class="span4 panel-dash-left-wrapper" id="side-content">
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
    <div class="panel-dash-panel panel-dash-right">
      <?php
      if (!empty($content['dash_right'])) {
        echo "<div class=\"inside\">" . $content['dash_right'] . "</div>";
      } ?>
    </div>
  </div>
</div><!-- close panel-dash -->
