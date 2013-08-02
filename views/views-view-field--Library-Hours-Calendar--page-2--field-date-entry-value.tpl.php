<?php
// $Id: views-view-field.tpl.php,v 1.1 2008/05/16 22:22:32 merlinofchaos Exp $
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */

$today = date('Y-m-d') . "T00:00:00";
$tomorrow = date("M d",time()+24*3600);
$dayafter = date("M d",time()+48*3600);
$tomorrowc = date("Y-m-d",time()+24*3600) . "T00:00:00";
if($today == $row->node_data_field_date_entry_field_date_entry_value){ 
  echo "<span class=\"today-display\">Today</span>";
}
//elseif($tomorrowc == $row->node_data_field_date_entry_field_date_entry_value){
//  echo "<span class=\"date-display-single\">Tomorrow <br /> $tomorrow</span>";
//}else{
//  echo "<span class=\"date-display-single\">$dayafter</span>";
//}
echo str_replace(" - ", "<br />",$output);
?>