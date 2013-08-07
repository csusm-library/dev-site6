<?php
// $Id: views-view-list.tpl.php,v 1.3 2008/09/30 19:47:11 merlinofchaos Exp $
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div class="item-list">
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
    <ul id="nice-menu-8" class="nice-menu nice-menu-down sf-js-enabled">
      <li><span class="menu-label">Find Databases: </span></li>
      <li><a href="http://biblio.csusm.edu/research_portal/databases">Most Popular</a></li>
      <li><a href="#">by Subject</a>
        <span class="submenu">
  <<?php print $options['type']; ?>>
    <?php foreach ($rows as $id => $row): ?>
      <li><?php print $row; ?></li>
      <?php
			if (strstr($row,"Ethnic")){
				echo "<li><a href=\"http://lib2.csusm.edu/course-guides/tagged/GE\">General Education</a></li>";
			} ?>
    <?php endforeach; ?>
  </<?php print $options['type']; ?>>
        </span>
      </li>
      <li><a href="http://biblio.csusm.edu/research_portal/databases/az">by Title</a></li>
      <li id="trial-db-link"><a href="http://biblio.csusm.edu/research_portal/databases#db-layout-right-tab-6">Trial Databases</a></li>
    </ul>
</div>

