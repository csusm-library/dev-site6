<?php
   $librarian_image = rand(1,6);

?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="well well-small block block-<?php print $block->module ?>">
  <div class="row-fluid">
    <div class="span3">
      <?php 
        echo "<img src=\"/images/backgrounds/ask-librarian" . $librarian_image . ".png\" />";
      ?>
    </div>
    <div class="span9">
      <h2 class="pane-title">Ask a Librarian</h2>
      <ul class="nav nav-pills" id="myTab">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Chat</a>
            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
              <li>
          <div class="chat-info">Available 8am-9pm, M-Th, and 8am-3pm, Fridays.</div>
          <iframe name="chat-frame" id="chat-frame" src="" scrolling="no" frameborder="0">Your browser does not support inline frames or is currently configured not to display inline frames. Content can be viewed at actual source page: https://lib.csusm.edu:7443/webchat/userinfo.jsp?workgroup=rhd@workgroup.lib.csusm.edu</iframe>
        </li>
        </ul>
      </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Email</a>
            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
              <li><dl>
            <dt>
              <a href="https://biblio.csusm.edu/research/webforms/reference-quick-question">Research Help Form</a>
            </dt>
            <dd>for short information questions.<br /> A librarian will respond within 24 hours. </dd>
            <dt>
              <a href="http://biblio.csusm.edu/webforms/reference-appointment-request">
                <strong>Research Assistance Appointment</strong>
              </a>
            </dt>
            <dd>for more complex questions</dd>
          </dl>
                </li>
              </ul>
              </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Phone</a>
            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
              <li>
                <p><strong>Research Help</strong>: (760) 750-4391</p>
                <p><strong>Library Main</strong>: (760) 750-4348</p>
              </li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</div>