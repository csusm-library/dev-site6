<?php
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; }
if (!$status) { echo ' node-unpublished'; }
echo "\">\n";
echo "<div class=\"content\">\n";
if ($user->uid){
  echo '<div class="flag-subscription">' . flag_create_link('favorite', $node->nid) . ' Add to Favorites</div>';
}
	if ($node->field_trial_username[0]['value'] || $node->field_username[0]['value']){
		echo "<fieldset><legend>Trial/Login Info</legend> ";
    if ( $user->uid ) {
		echo "<table class=\"standard-data\">";
		if ($node->content['fieldgroup_tabs']['group_bibliographers']['field_trial_period']['field']['#children'] != ""){
			echo "<tr><td>Duration</td>";
		  echo "<td> " . $node->content['fieldgroup_tabs']['group_bibliographers']['field_trial_period']['field']['#children'] . "</td></tr>";
		}
		echo "<tr><td>URL</td>";
		echo "<td><a href=\"" . $node->field_resource_link[0]['url'] . "\">" . $node->field_resource_link[0]['url'] . "</a></td></tr>";
      echo "<tr><td>Username</td><td>";
		  if ($node->field_trial_username[0]['value']){
				echo $node->field_trial_username[0]['value'];
			} elseif ($node->field_username[0]['value']){
				echo $node->field_username[0]['value'];
			}
			echo "</td></tr>";
      echo "<tr><td>Password</td><td>";
		  if ($node->field_trial_password[0]['value']){
				echo $node->field_trial_password[0]['value'];
			} elseif ($node->field_password[0]['value']){
				echo $node->field_password[0]['value'];
			}
      echo "</td></tr></table>";
    }elseif ((!$user->uid && $node->field_auth_type[0]['value'] == "password") || (!$user->uid && $node->field_trial_username[0]['value'] != "")) {
      echo "<h3>Please login to obtain username and password</h3>";
      print drupal_get_form('user_login_block');
		}
    echo "</fieldset>";
	}else{
		echo "<p><a class=\"db-access-link button\" href=\"https://biblio.csusm.edu/find/database/redirect/" . $node->nid . "\">Access this resource</a></p>";
	}
echo "<h4>Description</h4><p>" . $node->field_annotation[0]['value'] . "</p>";
  echo "<h4>Full-Text Availability</h4><p>";
  switch($node->field_full_text[0]['value']){
	  case "10":
	    echo "<p>Database has full-text</p>";
		break;
	  case "8":
	    echo "<p>Database has some full-text; plus links to full-text via Get-It <img src='/images/icons/sfx.gif' alt='Database has some full-text; plus links to full-text via Get-It' width='16' height='16' border='0' /></p>";
		break;
	  case "6":
	    echo "<p>Database links to full-text via Get-It <img src='/images/icons/sfx.gif' alt='Database links to full-text via Get-It' width='16' height='16' border='0' /></p>";
		break;
	  case "4":
	    echo "<p>Database has some full-text</p>";
		break;
	  case "2":
      echo "<p>CD ROMS are viewable over the web <img src='/images/icons/cd1-pub.png' alt='CD ROMS are viewable over the web.' width='18' height='19' border='0' /></p>";
		break;
	}
	echo "</p>";
  echo "<h4>Coverage</h4> <p>" . $node->field_coverage_starts[0]['value'] . "-" . $node->field_coverage_to[0]['value'] . "</p>";
  	switch($node->field_scholarly[0]['value']){
	  case "10":
	    $strScholarly = "all";
		break;
	  case "8":
	    $strScholarly = "most";
		break;
	  case "6":
	    $strScholarly = "some";
		break;
	  case "4":
	    $strScholarly = "few";
		break;
	  case "0":
	    $strScholarly = "none";
		break;
	}
  echo "<h4>Scholarly Holdings</h4><p>" . $strScholarly . "</p>";
		echo  "</div>\n";
  echo "</div><a name=\"comments-area\"></a>\n";
		$displayIP = escapeshellcmd($_SERVER['REMOTE_ADDR']);  //obtain URL and put into variable
  //if ($displayIP == "144.37.176.208"){
			 //print_r($node);
		//}
