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
<div class="yamm">
  <ul class="nav nav-pills">
    <li class="nav-header">Databases: </li>
    <li><a href="http://biblio.csusm.edu/research_portal/databases">Most Popular</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">by Subject <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <div class="row-fluid">
            <ul class="span6 unstyled">
              <?php $i=0;
              foreach ($rows as $id => $row): ?>
                <li><?php print $row; ?></li>
                <?php
                if ($i== 18){
                  echo "</ul><ul class=\"span6 unstyled\">";
                }
                $i++;
              endforeach; ?>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li><a href="http://biblio.csusm.edu/research_portal/databases/az">by Title</a></li>
    <li id="trial-db-link"><a href="http://biblio.csusm.edu/research_portal/databases#db-layout-right-tab-6">Trial Databases</a></li>
  </ul>
</div>
