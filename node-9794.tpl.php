<?php
global $user;
echo "<div id=\"node-" . $node->nid . "\" class=\"node " . $node->type;
if ($sticky) { echo ' sticky'; } 
if (!$status) { echo ' node-unpublished'; }
if ($node->field_sidebar1[0]['view'] || $node->field_sidebar2[0]['view']){ echo ' right-sidebar'; }
echo "\">\n";
if ($node->field_spc_image[0]['view'] != ""){
  echo $node->field_spc_image[0]['view'] . "\n";
}
$indexID=substr(trim($_GET["indexID"]),0,15);
$typeID=substr(trim($_GET["typeID"]),0,10);
$Location=substr(trim($_GET["l"]),0,1);
$selectedClass=" class='selected-option'";
if (substr($_GET["stype"],0,1) == "a" || strlen($indexID) > 0 || strlen($typeID) > 0) {
  $searchType="a";
  $searchTypeSuffix="Advanced";
}
else {
  $searchType="s";
}
?>
<div id="db-table-layer">
<div id="container-tabs">
<ul id="top-tabs-menu">
<li><a href="/catalog/
<? 
echo $searchType;
?>
_entire.php
<? 
if (($typeID != "")) {
  echo "?typeID=" + $typeID;
}
if (($indexID != "")) {
  echo "?indexID=" + $indexID;
}
?>
" title="Entire Collection 
<? 
echo $searchTypeSuffix;
?>
"><span>Entire Collection</span></a></li>
<li><a href="/catalog/
<? 
echo $searchType;
?>
_media.php

<? 
if (($typeID != "")) {
  echo "?typeID=" + $typeID;
}
if (($indexID != "")) {
  echo "?indexID=" + $indexID;
}
?>
" title="Media Library 
<? 
echo $searchTypeSuffix;
?>
"><span>Media Library</span></a></li>
<li><a href="/catalog/
<? 
echo $searchType;
?>
_barahona.php

<? 
if (($typeID != "")) {
  echo "?typeID=" + $typeID;
}
if (($indexID != "")) {
  echo "?indexID=" + $indexID;
}
?>
" title="Barahona Center 
<? 
echo $searchTypeSuffix;
?>
"><span>Barahona Center</span></a></li>
</ul>
</div><!-- Close #container-tabs -->
<p class="credits">This library catalog is funded in part by the <a href="/about/rooms/hansen.asp">Virginia Hansen Endowment</a> and  by the Institute of Museum and Library Services through an Act of Congress.</p>
</div><!-- Close #db-table-layer -->
<div id="left-sidebar-holder">
<ul id="catalog-left-menu">
<li
<? 
if ($searchType == "s") {
  echo $selectedClass;
}
?>
><a href="/find/catalog/?stype=s" id="simple-search">Simple Search</a></li>
<li
<? 
if ($searchType == "a") {
  echo $selectedClass;
}
?>
><a href="/find/catalog/?stype=a" id="advanced-search">Advanced Search</a></li>
</ul>
<br /><br />
<div class="panel-col-right">
<div class="inside">
<div id="sidebar-right1">
<div class="right-row">
  <div class="title-corner"></div>
  <div class="field-field-sidebar1-heading">
    <div class="field-item">More Tools</div>
  </div>
  <div class="field-field-sidebar1">
<ul>
<li><a href="http://library.csusm.edu/catalog/circuit/">Circuit (San Diego Libraries)</a></li>
<li><a href="http://xerxes.calstate.edu/sanmarcos/books/">Worldcat</a></li>
<li><a href="/services/ill.asp">Interlibrary Loan</a></li>
<li><a href="/my_account/index.asp">My Account</a></li>
<li><a href="/catalog/other.asp">Other Catalogs</a></li>
<li><a href="/finding/reserves/">Reserves</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><!-- Close #left-db-menu-holder -->
<br clear="all" />

<? 
if ($Location != "") {
  if ($Location == "b") {
    $TabNumber="2";
  }
  elseif ($Location == "m") {
    $TabNumber="1";
  }
  else {
    $TabNumber="0";
  }
?>

<script language="javascript" type="text/javascript">
$(document).ready(function() {
  $('#container-tabs > ul#top-tabs-menu').tabs("select", 
<? 
echo $TabNumber;
?>
);}); 
</script>
<?php
}

echo $node->content['body']['#value'] . "\n";
echo "</div>\n";  // close .node
echo "<br clear=\"all\" />"; 
echo str_replace("/webfm_send","https://lib.csusm.edu/webfm_send",$node->content['webfm_attachments']['#value']) . "\n";
if (!$user->uid && $node->og_public == "0") : 
  print drupal_get_form('user_login');
endif;
if ($links): 
  echo "<div class=\"links\" style=\"margin-top:35px;\">\n"
  . $links . "\n"
  . "</div>\n";
endif; 
echo "<div class=\"vote-updown-wrapper\"><div class=\"vote-updown-title\">Was this page helpful? </div>";
echo $node->content['vud_node_widget_display']['#value'] . "</div>\n";
print theme('sexybookmarks', $node);
?>
