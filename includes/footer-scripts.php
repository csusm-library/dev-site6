<script language="javascript" type="text/javascript">
  var url = document.location.toString();
  var numRand = Math.floor(Math.random()*10000001)
  $(document).ready(function(){
    $('.toboggan-login-link').addClass('btn btn-small');
    $('#toboggan-login').addClass('dropdown-menu');
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
<?php } ?>
