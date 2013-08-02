<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php print $head_title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
if ($is_front||strstr($body_classes,"front")){
	 echo "<link href=\"/" . $directory . "/stylesheets/frontpage.css?" . time() . "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\" />\n";
	 $librarian_image = rand(1,6);
  if ($user->uid){
    if (in_array("webadmins",$user->roles)||$user->uid == "1") {
      echo "<link href=\"/sites/all/modules/admin/includes/admin.toolbar.base.css\" rel=\"stylesheet\" media=\"all\" type=\"text/css\" />\n";
      echo "<link href=\"/sites/all/modules/admin/includes/admin.toolbar.css\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\n";
      echo "<link href=\"/sites/all/modules/admin/includes/admin.menu.css\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\n";
    }
	}
	echo "<style type=\"text/css\">";
  echo "#help-panel{background: url(/images/backgrounds/ask-librarian" . $librarian_image . ".png) no-repeat 97% 52px #fff;}";
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
echo $scripts . "\n";?>

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
$file = file_get_contents('/var/www/d6/sites/libdev2.csusm.edu/themes/csusmlibrary/includes/top-menu.php');
$file = str_replace('http://biblio', 'https://libdev2', $file);
echo($file);
echo $header;
if ( $user->uid ) {
  $user_details = user_load(array('uid'=>$user->uid));
	 profile_load_profile($user_details);
  echo "<div id=\"user-menu-top\">";
  echo "<ul class=\"nice-menu nice-menu-down\">";
  echo "<li id=\"user-name\"><span>Hello, </span>" . $user_details->profile_firstname . "</li><li><a href=\"https://biblio.csusm.edu/people/" . $user->uid . "\">Your Recommendations</a></li><li><a href=\"https://biblio.csusm.edu/people/" . $user->uid . "/my/favorite/databases\">Your Favorites</a></li>";
		//testing from ic IP -  if ($remote_ip == ("144.37.4.202" || "144.37.176.208")){
  	include("/var/www/library/s/res.php");
    echo "<li id=\"eres-stuff\" class=\"pop-up-parent\"><a href=\"/external/course-reserves/course-reserves\">Course Reserves</a><ul class=\"pop-up-menu\">";
    reserves_lookup($user->name,$user->uid);
    echo "</ul></li>";
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
  echo "<div id=\"breadcrumb-holder\"><div class=\"breadcrumb\">\n";
  echo $breadcrumb . "\n";
  echo "</div></div>\n";
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
if ($help): echo $help . "\n"; endif;
if ($messages):
  echo $messages . "\n";
endif;
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
?>
<script language="javascript" type="text/javascript">
  var url = document.location.toString();
	 var numRand = Math.floor(Math.random()*10000001)
  $(document).ready(function(){
  $("#appbar_container #chatFrame").attr({
    src: ""
  });
  $("#temecula-site #chatFrame").attr({
    src: "https://lib.csusm.edu/webdev/chat/"
  });
  $("#sidebar-right2 #chatFrame").attr({
    src: "https://lib.csusm.edu/webdev/chat/"
  });
  $("#chat-frame").attr({
    src: ""
  });
  if ($.cookie("appbarchat") == "closed"){
    $('#appbar #block-block-3').parent().slideToggle('slow');
  }
  $('#appbar #block-block-3 .content').prepend('<h2>Need Help?</h2>');
  $('#appbar #block-block-3 .content').prepend('<div class="expand">open | </div>');
<?php if (!$is_front && strstr($displayedURL,"fastpath")){ ?>
    $('#fastpath-connect-chat-form').submit(function() {
      window.open('', 'framemain', 'width=400,height=400,resizeable,scrollbars');
      this.target = 'framemain';
    });
<?php } ?>
<?php if (strstr($content,"calendar-date-select")){?>
  $("#calendar-date-select-form input#edit-submit").css('display','block');
  $("#calendar-date-select-form input#edit-submit").val('Go');
<?php } ?>
  $('#appbar .block h3').click(function() {
    var content = $(this).next('.content');
    var visible = content.slideToggle('fast').attr('display');
		var parentdivid = content.parent().attr("id");
    if (parentdivid == '#block-block-3'){
      $("#chatFrame").attr({
        src: "https://lib.csusm.edu/webdev/chat/"
			});
      $('#appbar #block-block-3 .content').css('margin-bottom','0px');
    }
		$(this).next('.content').css('margin-bottom','0px')
		return false;
  });
  $('#appbar .block').each(function() {
    $(this).find('.content').css('left', $(this).css('left'));
    $(this).find('.content').prepend('<div class="minimize"> close</div>');
  });
  $('#appbar .block .minimize').click(function() {
    $(this).parent().slideDown('slow');
    $(this).parent().css('width','280px');
    $(this).parent().css('margin-bottom','-370px');
    $(this).parent().css('margin-left','-180px');
    if ($(this).parent().attr("id") == '#block-block-3'){
      $.cookie("appbarchat", "closed");
		}
  });
	$('#appbar #block-block-3 h2').click(function(){
    $(this).parent().css('margin-bottom','5px');
    $(this).parent().css('margin-left','-280px');
    $(this).parent().css('width','400px');
				$("#chatFrame").attr({
					src: "https://lib.csusm.edu/webdev/chat/"
				});
			 return false;
  });
	$('#appbar .block .expand').click(function(){
    $(this).parent().css('margin-bottom','5px');
    $(this).parent().css('margin-left','-280px');
    $(this).parent().css('width','400px');
				$("#chatFrame").attr({
					src: "https://lib.csusm.edu/webdev/chat/"
				});
			 return false;
  });
  $('select#searchscope').change(function(){
    if ($(this).val() == 'journals'){
      $('#search_menu').val('title');
    }else if ($(this).val() == 'online'){
      $('#search_menu').val('title');
    }else{
      $('#search_menu').val('keyword');
	  }
  });
<?php
if ($is_front){?>
  function initMenu() {
    $('#help-panel .help-title').click(
    function() {
    var checkElement = $(this).next();
    if((checkElement.is('.content')) && (checkElement.is(':visible'))) {
      checkElement.slideUp(100);
      $("#help-panel .help-title").css('font-weight','normal');
      $('#help-panel').removeAttr('style');
      $('#help-panel #chat-link .help-title').removeAttr('style');
      $('#help-panel .minimize').remove();
      $("#help-panel iframe").attr({
        src: "https://lib.csusm.edu/webdev/chat/"
      });
      return false;
    }
    if((checkElement.is('.content')) && (!checkElement.is(':visible'))) {
      $('#help-panel').css('width','438px')
      if($(this).parent().attr('id') == 'chat-link') {
        $(this).css('background-image','none');
        $("#help-panel iframe").attr({
          src: "https://lib.csusm.edu/webdev/chat/"
        });
      }
      $('#help-panel .minimize').remove();
      $(this).append('<span class="minimize"> close</span>');
      $("#help-panel .help-title").css('font-weight','normal');
      $('#help-panel .content').slideUp(100);
      $(this).css('font-weight','bold');
      checkElement.slideDown(100);
      return false;
    }
  }
  );
  }
  initMenu();
  $(".pane-library-hours-calendar h2.pane-title").append('<span class="hours-icon"></span>');
		$("#mini-panel-database_lookup .pane-database-guides-lists h2").attr("style","display:none");
  $("#ctools-jump-menu #edit-go").attr("style","display:none");
		$("#block-block-4 h3").after($("#discov-faq-link"));
<?php
}
if ($is_front||strstr($displayedURL,"temecula")){?>
  $("#ctools-jump-menu #edit-jump option:first").text("Find Databases by Subject");
<?php
}
?>
  var viewdbdescs = $.cookie('viewdbdescs');
<?php if (strstr($content,"db-layout")||strstr($content,"recommended-dbs")){?>
  $(".item-infolink").html("info");
  $(".item-infolink").attr({title: "Show database descriptions"});
  if (viewdbdescs == "expand"){
    $(".item-desc").show();
    $(".item-infolink").hide();
    $("span.db-desc-toggle").html("Hide Descriptions");
    $("span.db-desc-toggle").removeClass('headerHidden');
    $("span.db-desc-toggle").addClass('headerShown');
  } else {
    $("span.db-desc-toggle").html("Show database descriptions");
    $(".item-desc").hide();
    $("span.db-desc-toggle").removeClass('headerShown');
    $("span.db-desc-toggle").addClass('headerHidden');
  }
  $(".item-infolink").toggle(function(){
    $(this).next(".item-desc").slideDown(500);
		_gaq.push(['_trackPageview', '/databases/info']);
    }, function(){
    $(this).next(".item-desc").slideUp(500);
  });
  $(".item-content .item-title").click(function(){
    location.href = $(this).attr("href");
  });
  $("span.db-desc-toggle").click(function(){
    if($('.headerHidden').length > 0) {
    $(".item-infolink").fadeOut(500);
    $(".item-desc").fadeIn(1500);
    $("span.db-desc-toggle").html("Hide Descriptions");
    $("span.db-desc-toggle").removeClass('headerHidden');
    $("span.db-desc-toggle").addClass('headerShown');
    $.cookie('viewdbdescs', 'expand', { path: '/databases/', expires: 10 });
		_gaq.push(['_trackPageview', '/databases/db_desc']);
    } else {
    $(".item-infolink").fadeIn(2000);
    $(".item-desc").fadeOut(1000);
    $("span.db-desc-toggle").html("Show database descriptions");
    $("span.db-desc-toggle").removeClass('headerShown');
    $("span.db-desc-toggle").addClass('headerHidden');
    $.cookie('viewdbdescs', null, { path: '/databases/'});
    }
    return false;
  });
  $('#db-layout a.item-title').click(function(){
    var title = $(this).text();
    var outbound = '/external/dbs/' + title;
		_gaq.push(['_trackPageview', outbound]);
  });
  if($('#db-layout tr.odd').length == 0) {
    $("#db-layout tr:even").addClass("even");
    $("#db-layout tr:odd").addClass("odd");
 	}
<?php
  if (!$is_front){?>
  $("#sign-in-bubble").html("Sign-in to save and <br>view your favorite databases");
  $("#sign-in-bubble-wrapper").css('display','block');
<?php
		}
}
?>
  $('select#edit-jump').change(function(){
    var selected = $("#edit-jump option:selected");
    if(selected.val() != 0){
      location.href = selected.val();
    }
  });
  $('#views-exposed-form-Course-Guides-page-1').attr('action', '/research_portal/courses/help/');
  $('.views-exposed-form input:submit').attr('value','GO');
  var webdevlink = $('#webdev-feedback').attr('href') + '?nodeid=<?php echo $node->nid; ?>';
  $('#webdev-feedback').attr('href', webdevlink)
});
</script>
<script src="//cdn.jotfor.ms/static/feedback2.js?3.1.2231" type="text/javascript"></script>
<script type="text/javascript">
  new JotformFeedback({
     formId   : "30778287754166",
     buttonText : "Feedback",
     base   : "http://jotform.us/",
    iframeParameters: {
     'referrer':  document.URL},
     background : "#3F85D4",
     fontColor  : "#FFFFFF",
     buttonSide : "right",
     buttonAlign  : "center",
     type   : 1,
     width    : 360,
     height   : 943,
     instant    : true
  });
</script>
<?php
echo $closure;
$eggtest = "no";
if ($eggtest == "yes"){?>
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName('script')[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0010/9478.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<?php
}
echo "</body>". "\n"; ?>
</html>
