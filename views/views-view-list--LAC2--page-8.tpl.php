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


<ul id="nice-menu-9" class="nice-menu nice-menu-down sf-js-enabled">
  <li id="find-menu" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Research Guides</a>
    <ul class="dropdown-menu" id="find-research-guides">
    <?php
    foreach ($rows as $id => $row):
      echo "<li>" . $row . "</li>";
      if (strstr($row,"Ethnic")){
        echo "<li><a href=\"http://lib2.csusm.edu/course-guides/tagged/GE\">General Education</a></li>";
      }

    endforeach;
    echo "<ul>";
  echo "<li>";
echo "<ul>";
?>
