<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php print $head_title ?></title>
<?php
global $user;
$displayedURL = escapeshellcmd($_SERVER['REQUEST_URI']);  //obtain URL and put into variable
$remote_ip=$_SERVER['REMOTE_ADDR'];
if ($_SERVER['HTTPS'] == "on") {
	$secure == "yes";
}
echo $head;
//if($is_front||$displayedURL=="/media_library"||$displayedURL=="/media_library/"){
  //echo "<meta http-equiv=\"refresh\" content=\"900\" />\n";
//}
$cssreload = mt_rand(10000, 99999);
echo "<meta property=\"fb:page_id\" content=\"128015513911336\" />";
echo "<meta name=\"google-site-verification\" content=\"-3cFwvnQPZVZKjlr7eFa_vf8S_JomcdcseblcyDXMFQ\" />\n";
echo "<meta name=\"alexaVerifyID\" content=\"I3PM5s8QOgKR3WbT-OS1jwKBjEs\" />\n";
echo "<link href=\"/" . $directory . "/stylesheets/frontpage.css?" . time() . "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\" />\n";
if ($is_front||strstr($body_classes,"front")){
  if ($user->uid){
    if (in_array("webadmins",$user->roles)||$user->uid == "1") {
      echo "<link href=\"/sites/all/modules/admin/includes/admin.toolbar.base.css\" rel=\"stylesheet\" media=\"all\" type=\"text/css\" />\n";
      echo "<link href=\"/sites/all/modules/admin/includes/admin.toolbar.css\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\n";
      echo "<link href=\"/sites/all/modules/admin/includes/admin.menu.css\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\n";
    }
	}
	echo "<style type=\"text/css\">";
  if(strstr($remote_ip,"144.37")){
    echo "#sign-in-bubble-wrapper{display:none;}";
  }
  echo "</style>";
} else {
  echo $styles;
  echo "<link href=\"/" . $directory . "/stylesheets/test.css?" . $cssreload ."\" rel=\"stylesheet\" media=\"all\" type=\"text/css\" />";
  echo "<link href=\"/css/handheld.css\" rel=\"stylesheet\" media=\"handheld\" type=\"text/css\" />";
  if(strstr($remote_ip,"144.37")){
    echo "<style type=\"text/css\">";
    echo "#sign-in-bubble-wrapper{display:none;}";
    echo "</style>";
  }
}
if (strstr($displayedURL,"/databases")){
  $body_classes = $body_classes . " databases";
}
if($node->nid !=""){
	 $body_classes = $body_classes . " node-" . $node->nid;
}
if (strstr($displayedURL,"temecula")){
  echo "<link href=\"/" . $directory . "/stylesheets/temecula.css?" . $cssreload ."\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />";
}
if (strstr($displayedURL,"sitemap")){
  echo "<link href=\"/sites/all/libraries/slickmap/slickmap.css\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />";
}
echo "<!--[if IE 8]><link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"/" . $directory . "/stylesheets/fix-ie8.css?" . $cssreload ."\" /><![endif]-->\n";
echo "<!--[if IE 9]><style type=\"text/css\">.pane-books-search2 .form-line-item select#searchtype{float:left;}#mini-panel-books_search2 #catalog-search .form-text, .pane-books-search2 #circuit-search .form-text, .pane-books-search2 #worldcatsearch .form-text {margin-top:-25px;height:19px;}#nice-menu-7 li:hover ul, .menuparent li:hover ul, #nice-menu-7 .over ul{visibility:visible;top:58px;}
</style><![endif]-->\n";
$ip=$_SERVER['REMOTE_ADDR'];?>
<?php
  echo "<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>\n";
  echo $scripts . "\n";
  echo "<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>\n";
?>
<!-- Piwik -->
<script type="text/javascript">
var _paq = _paq || [];
(function(){
    var u=(("https:" == document.location.protocol) ? "https://lib.csusm.edu/c/" : "http://lib.csusm.edu/c/");
    _paq.push(['setSiteId', 1]);
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    var d=document,
        g=d.createElement('script'),
        s=d.getElementsByTagName('script')[0];
        g.type='text/javascript';
        g.defer=true;
        g.async=true;
        g.src=u+'piwik.js';
        s.parentNode.insertBefore(g,s);
})();
</script>
<!-- End Piwik Code -->
<?php
echo "</head>\n";
echo "<body class=\"" . $body_classes . "\">";
include('/var/www/d6/sites/libdev2.csusm.edu/themes/csusmlibrary/includes/top-menu.php');

if ($help): echo $help . "\n"; endif;
if ($messages):
  echo $messages . "\n";
endif;
include('/var/www/d6/sites/libdev2.csusm.edu/themes/csusmlibrary/includes/top-menu-closure.php');

if ( $user->uid ) {
  $user_details = user_load(array('uid'=>$user->uid));
	 profile_load_profile($user_details);
  echo "<div id=\"user-menu-top\">";
  echo "<ul class=\"nice-menu nice-menu-down\">";
  echo "<li id=\"user-name\"><span>Hello, </span>" . $user_details->profile_firstname . "</li><li><a href=\"https://biblio.csusm.edu/people/" . $user->uid . "\">Your Recommendations</a></li><li><a href=\"https://biblio.csusm.edu/people/" . $user->uid . "/my/favorite/databases\">Your Favorites</a></li>";
		//testing from ic IP -  if ($remote_ip == ("144.37.4.202" || "144.37.176.208")){
    include("/var/www/d6/sites/libdev2.csusm.edu/themes/csusmlibrary/includes/xerxes-saved-articles.php");
    echo "<li id=\"xerxes-stuff\" class=\"pop-up-parent\"><a href=\"http://library.calstate.edu/sanmarcos/folder/home/" . $user->name . "\">Saved Articles</a>";
    echo savedArticles($user->name);
    echo "</li>";
		//testing from ic IP -  }
		echo "<li id=\"logout\"><a href=\"/logout\">Logout</a></li></ul>";
		echo "</div>";
} else {
  echo "<div id=\"sign-in-bubble-wrapper\"><div class=\"corner\"></div><div id=\"sign-in-bubble\">Sign-in for course reserves, access to databases, &amp;  recommendations</div></div>";
}
if ($breadcrumb && !$is_front):
  if($node->type == "dbguide" || $node->type == "amr" || strstr($displayedURL,"research_portal/databases/az") || (strstr($displayedURL,"/databases") && strstr($body_classes,"sidebar-right"))){
    $dbpath = str_replace("/research_portal/databases/guides/","",$displayedURL);
		  $dbpath = str_replace("-"," ",$dbpath);
		  $breadcrumb = $breadcrumb . " &raquo; <a href=\"/research_portal/databases\">Articles &amp; Databases</a>";
	  }
  $breadcrumb = $breadcrumb . " &raquo; <em>" . $title . "</em>";
  echo $breadcrumb . "\n";
endif;
if ($pre_content):
  echo "<div id=\"pre_content\">\n";
  echo $pre_content . "\n";
  echo "</div>\n";
endif;
if ($featured):
  echo "<div id=\"featured\">\n";
  echo $featured . "\n";
  echo "</div>\n";
endif;
if ($tabs  && !$is_front && $user->uid): echo '<div id="tabs-wrapper">'; endif;
if ($title  && !$is_front): echo '<h1 class="page-title'. ($tabs ? ' with-tabs' : '') .'">'. t($title) . '</h1>' . (strstr($tabs,'Edit') ? str_replace("biblio","lib",$tabs) : ''); endif;
if ($tabs  && !$is_front && $user->uid): echo '</div>'; endif;
if (isset($tabs2)  && !$is_front && $user->uid): echo $tabs2 . "\n"; endif;
//$content =  str_replace("//biblio.csusm.edu/sites/biblio.csusm.edu/files/imagecache/spotlight_carousel/sites/lib.csusm.edu/files/spotlights","//lib.csusm.edu/sites/lib.csusm.edu/files/imagecache/spotlight_carousel/spotlights",$content) . "\n";
//$pattern = '/:(.*)imagecache(.*)sites\/lib.csusm.edu\/files\/(.*)/';
//$replacement = ':$1imagecache$2$3';
//$content = str_replace("//biblio.csusm.edu/sites/biblio.csusm.edu/files/imagecache","//lib.csusm.edu/sites/lib.csusm.edu/files/imagecache",preg_replace($pattern, $replacement, $content));
//$content = str_replace("//lib.csusm.edu/imagecache/","//lib.csusm.edu/sites/lib.csusm.edu/files/imagecache/",$content);
if ($_SERVER['HTTPS'] == "on") {
	//$content = str_replace("http://lib.csusm","https://lib.csusm",$content);
	$content = str_replace("http://biblio.csusm","https://libdev2.csusm",$content);
}
echo $content;
if ($content_bottom):
  echo "<div id=\"content_bottom\">\n";
  echo $content_bottom . "\n";
  echo "</div>\n";
endif;
if ($left):
  echo "<div id=\"sidebar-left\" class=\"sidebar\">\n";
  echo "<div class=\"inside\">\n";
  echo $left;
  echo "</div>\n";  //close #sidebar-left
  echo "</div>\n";  //close #sidebar-left
endif;
if ($right):
  echo "<div id=\"right-sidebar-holder\">\n";
  echo $right;
  echo "</div>\n";  //close #sidebar-right
endif;
echo "<br clear=\"all\" />\n";
if ($node->nid){
  echo "<div class=\"edit-link-holder\"><a href=\"https://libdev2.csusm.edu/node/" . $node->nid . "/edit\" class=\"edit-link\">[edit this page]</a></div>";
}
$file = file_get_contents('/var/www/d6/sites/libdev2.csusm.edu/themes/csusmlibrary/includes/footer-menu.php');
$file = str_replace('http://biblio', 'https://biblio', $file);
echo($file);

if ($menubar):
  echo "<div id=\"appbar_container\"><div id=\"appbar_sub\"><div id=\"appbar\"><div id=\"standalone-links\"><span class=\"appbar-item\">Phone: (760) 750-4348</span><span class=\"appbar-divider\"> | </span><span class=\"appbar-item\"><a href=\"/external/contact-library/email-us\">Email Us</a></span><span class=\"appbar-divider\"> | </span><span class=\"appbar-item\"><a href=\"/search-this-site\">Site Search</a></span><span class=\"appbar-divider\"> | </span><span class=\"appbar-item\"><a href=\"http://mlib.csusm.edu\">Mobile Version</a></span></div>";
  echo $menubar . "\n";
  echo "</div></div></div>\n";  //close #menubar
endif;
include('/var/www/d6/sites/libdev2.csusm.edu/themes/csusmlibrary/includes/footer-scripts.php');
echo "</body>". "\n"; ?>
</html>
