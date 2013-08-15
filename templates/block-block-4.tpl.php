<?php
// $Id: block.tpl.php,v 1.2 2009/03/17 05:04:14 andregriffin Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#primo" data-toggle="tab">Discovery</a></li>
    <li><a href="#catalog" data-toggle="tab">Books, Media, & More</a></li>
    <li data-toggle="tooltip" title="Get it in 2-5 business days"><a href="#circuit" data-toggle="tab">Circuit</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="primo">
      <div id="discov-new-sign"><span id="discov-new-sign-inner">New!</span></div>
      <div id="discov-faq-link"><a href="/whatis-discovery-search" rel="lightframe" title="What is Discovery Search?">[?]</a></div>
      <form method="get" action="http://library.calstate.edu/sanmarcos/articles/search" class="form-inline" id="discovery-search">
          <input type="hidden" value="English" name="facet.Language">
          <label for="field" class="access-only">Search for </label>
          <input type="text" value="" size="32" name="query" id="summons-query" class="span8" />
          <label for="query" class="access-only"> as </label>
          <select name="field" id="summons-limiter" class="form-select">
            <option value="keyword">all fields</option>
            <option value="title">title</option>
            <option value="author">author</option>
            <option value="subject">subject</option>
          </select>
          <input type="submit" class="btn btn-info form-submit submit-searchbox_" value="Go" name="Submit" />
      </form>
    </div>
    <div class="tab-pane" id="catalog">
      <form name="catalog-search" id="catalog-search" class="form-inline" method="get" action="http://library.csusm.edu/catalog/resolvers/resolve_simple.asp">
      <label for="catalog-search-input" class="access-only">Search for </label>
      <input name="search" id="catalog-search-input" class="span7" size="18" tabindex="1" type="text" />
      <label for="search_menu" class="access-only"> in </label>
      <select name="menu" id="search_menu" tabindex="2">
      <option value="keyword" id="keyword">Keywords</option>
      <option value="author" id="author">Authors</option>
      <option value="title" id="title">Titles</option>
      <option value="subject" id="subject">Subject Headings</option>
      <option value="formGenre" id="formGenre">Genres / Forms</option>
      <option value="callNumber" id="callNumber">Call #s</option>
      <option value="otherNumber" id="otherNumber">Standard #s</option>
      </select>
      <input name="catalog-search-button" id="catalog-search-button" value="Search" tabindex="3" class="btn btn-info formsubmit" type="submit" />
      <div class="pull-left" id="searchscope-wrapper">
      <label class="inline-label">search in</label>
      <select id="searchscope" name="scope">
      <option value="entire"> Entire Collection</option>
      <option value="media"> Media Library</option>
      <option value="barahona"> Barahona Center</option>
      <option value="curr"> Hansen Curriculum Room</option>
      <option value="journal"> Journals &amp; Newspapers</option>
      <option value="online"> Online Resources</option>
      </select>
      </div>
      <div class="pull-right" id="adv-search-wrapper">
      <a href="http://library.csusm.edu/catalog/">More Options</a> | <a href="http://library.csusm.edu/catalog/index.asp?stype=a">Advanced Search</a></div>
      </form>
    </div>
    <div class="tab-pane" id="circuit">
      <form action="http://circuit.sdsu.edu/search/" id="circuit-search" method="post" name="search"  class="form-inline">
      <label for="searchtype" class="access-only">Search </label>
      <select name="searchtype" id="searchtype">
      <option value="X" selected="selected">Keywords</option>
      <option value="t">Titles</option>
      <option value="a">Authors</option>
      <option value="d">Subjects</option>
      </select>
      <label class="inline-label access-only" for="circuit-search-input"> for </label>
      <input name="searcharg" size="26" class="span6" id="circuit-search-input" type="text" />
      <input type="hidden" name="SORT" value="D" />
      <input type="submit" value="Search" name="submit" id="circuit-search-button" class="btn btn-info form-submit" />
      <div class="pull-left" id="circuit-desc">Get it in 2-5 business days</div>
      </form>
    </div>
  </div>
</div>
