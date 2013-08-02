<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
    <ul id="nice-menu-8" class="nice-menu nice-menu-down sf-js-enabled">
      <li><span class="menu-label">Find Databases: </span></li>
      <li><a href="http://biblio.csusm.edu/research_portal/databases">Most Popular</a></li>
      <li><a href="#">by Subject</a>
        <span class="submenu">
        <<?php print $options['type']; ?>>
        <?php $i=0;
        foreach ($rows as $id => $row): ?>
        <li><?php print $row; ?></li>
        <?php
        if ($i== 18){
          echo "</ul><ul>";
        }
        $i++;
        endforeach; ?>
        </<?php print $options['type']; ?>>
      </span>
      </li>
      <li><a href="http://biblio.csusm.edu/research_portal/databases/az">by Title</a></li>
      <li id="trial-db-link"><a href="http://biblio.csusm.edu/research_portal/databases#db-layout-right-tab-6">Trial Databases</a></li>
    </ul>
    <div id="specific-article-link">
<a href="http://biblio.csusm.edu/research_portal/find/articles/specific">Looking for a Specific Article?</a>
</div>


