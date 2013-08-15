<script language="javascript" type="text/javascript">
  var url = document.location.toString();
  var numRand = Math.floor(Math.random()*10000001)
  $(document).ready(function(){
    $('select').selectpicker();
    $('.toboggan-login-link').addClass('btn');
    $('.messages').addClass('alert');
    $(".alert").alert();
    $('#block-views-Library_Hours_Calendar-page_2 h3').prepend('<i class="icon-time"></i> ');
    $('#toboggan-login').addClass('dropdown-menu');
    $("#temecula-site #chatFrame").attr({
      src: "https://lib.csusm.edu/webdev/chat/"
    });
    $("#sidebar-right2 #chatFrame").attr({
      src: "https://lib.csusm.edu/webdev/chat/"
    });
    $("#chat-frame").attr({
      src: ""
    });
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
      $("#block-block-5 iframe").attr({
        src: "https://lib.csusm.edu/webdev/chat/"
      });
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
