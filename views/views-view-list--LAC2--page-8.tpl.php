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
  <ul class="nav nav-stacked">
    <li id="research-guide-menu" class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Research Guides <b class="caret"></b></a>
      <ul class="dropdown-menu" id="find-research-guides">
        <li>
          <div class="row-fluid">
            <ul class="span6 unstyled">
              <?php
                $i=0;
                foreach ($rows as $id => $row):
                  echo "<li>" . $row . "</li>";
                  if (strstr($row,"Ethnic")){
                    echo "<li><a href=\"http://lib2.csusm.edu/course-guides/tagged/GE\">General Education</a></li>";
                  }
                  if ($i== 13){
                    echo "</ul><ul class=\"span6 unstyled\">";
                  }
                  $i++;
                endforeach;?>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    <li>
      <a href="http://lib2.csusm.edu/course-guides/">Course Guides</a>
    </li>
  <ul>
</div>