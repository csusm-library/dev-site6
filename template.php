<?php

/**
 * @file
 * File which contains theme overrides for the framework theme.
 */

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */

/**
 * Modify theme variables
 */
function phptemplate_preprocess(&$vars) {
  global $user;                                            // Get the current user
  $vars['is_admin'] = in_array('admin', $user->roles);     // Check for Admin, logged in
  $vars['logged_in'] = ($user->uid > 0) ? TRUE : FALSE;
  // Tell all templates where they are located.
  $variables['directory'] = path_to_theme();
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
  global $user;
  // Remove sidebars if disabled
  if (!$vars['show_blocks']) {
    $vars['left'] = '';
    $vars['right'] = '';
  }
  // Build array of helpful body classes
  $body_classes = array();
  $body_classes[] = ($vars['logged_in']) ? 'logged-in' : 'not-logged-in';                                 // Page user is logged in
  $body_classes[] = ($vars['is_front']) ? 'front' : '';                                          // Page is front page
  if (isset($vars['node'])) {
    $body_classes[] = ($vars['node']) ? 'full-node' : '';                                                   // Page is one full node
    $body_classes[] = ($vars['node']->type) ? $vars['node']->type : '';                       // Page has node-type-x, e.g., node-type-page
  }
  if (strstr($vars['title'],"Page not found")) {
    $body_classes[] = '404page';                       // 404 page
  }

  $body_classes[] = ($vars['left'] ? 'sidebar-left' : '');  // left sidebar
  $body_classes[] = ($vars['right'] ? 'sidebar-right' : '');  // right sidebar
  $body_classes = array_filter($body_classes);                                                            // Remove empty elements
  $vars['body_classes'] = implode(' ', $body_classes);                                                    // Create class list separated by spaces

  if ($secondary = menu_secondary_local_tasks()) {
    $output = '<span class="clear"></span>';
    $output .= "<ul class=\"tabs secondary\">\n". $secondary ."</ul>\n";
    $vars['tabs2'] = $output;
  }
  drupal_add_css('sites/all/libraries/bootstrap-select/bootstrap-select.min.css', 'theme', 'all', TRUE);
  drupal_add_css('sites/all/libraries/yamm/assets/css/yamm.css', 'theme', 'all', TRUE);
  drupal_add_js('sites/all/libraries/bootstrap-select/bootstrap-select.min.js');
  $new_css = drupal_add_css();
  $new_js = drupal_add_js();
  unset($new_css['all']['module']['sites/all/modules/views/css/views.css']);
  unset($new_css['all']['module']['sites/all/modules/taxonomy_context/taxonomy_context.css']);
  unset($new_css['all']['module']['sites/all/modules/jstools/activemenu/activemenu.css']);
  unset($new_css['all']['module']['sites/all/modules/filefield/filefield.css']);
  unset($new_css['all']['module']['sites/all/modules/cck/theme/content-module.css']);
  unset($new_css['all']['module']['sites/all/modules/activemenu/activemenu.css']);
  unset($new_css['all']['module']['sites/all/modules/og/theme/og.css']);
  unset($new_css['all']['module']['sites/all/modules/taxonomy_list/taxonomy_list.css']);
  unset($new_css['all']['module']['modules/aggregator/aggregator.css']);
  unset($new_css['all']['module']['modules/system/system-menus.css']);
  unset($new_css['all']['module']['sites/all/modules/logintoboggan/logintoboggan.css']);
  unset($new_css['all']['module']['sites/all/modules/nice_menus/nice_menus_default.css']);
  unset($new_css['all']['module']['sites/all/modules/og/og.css']);
  unset($new_css['all']['module']['sites/all/modules/watchdog/watchdog.css']);
  unset($new_css['all']['module']['sites/all/modules/ctools/css/ctools.css']);
  unset($new_css['all']['module']['sites/all/modules/panels/css/panels.css']);
  unset($new_css['all']['module']['modules/node/node.css']);
  unset($new_css['all']['module']['modules/system/defaults.css']);
  unset($new_css['all']['module']['modules/system/system.css']);
  unset($new_css['all']['module']['modules/user/user.css']);
  unset($new_css['all']['module']['sites/all/modules/collapsiblock/collapsiblock.css']);
  unset($new_css['all']['module']['sites/all/modules/nice_menus/nice_menus.css']);
  unset($new_css['all']['module']['sites/all/modules/upgrade_status/upgrade_assist/upgrade_assist.css']);
  unset($new_css['all']['module']['sites/all/modules/video_filter/video_filter.css']);
  if ((arg(0) != 'node' && !is_numeric(arg(1)) && arg(2) != 'edit') && (arg(0) != 'node' && arg(1) != 'add') && (arg(0) != 'webfm' && arg(0) != 'webfm#')) {
    unset($new_css['all']['module']['sites/all/modules/webfm/css/webfm.css']);
    unset($new_css['all']['module']['sites/all/modules/webfm/image/icon/panels/css/panels.css']);
  }
  unset($new_js['core']['misc/jquery.js']);
  $vars['head'] .= '<link '. drupal_attributes(array(
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css')
  ) ." />\n";
  $vars['head'] .= '<link '. drupal_attributes(array(
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css')
  ) ." />\n";
  $vars['head'] .= "<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>\n";
  $vars['styles'] = drupal_get_css($new_css);
  $vars['scripts'] = drupal_get_js('header', $new_js);
}

/**
 * Preprocessor for theme_node().
 */
function phptemplate_preprocess_node(&$vars) {
  if (arg(0) == 'taxonomy') {
    $suggestions = array(
      'node-taxonomy'
    );
    $vars['template_files'] = array_merge($vars['template_files'], $suggestions);
  }
		$vars['template_files'][] = 'node-' . $vars['nid'];
}

/**
 * Set defaults for comments display
 * (Requires comment-wrapper.tpl.php file in theme directory)
 */
function phptemplate_preprocess_comment_wrapper(&$vars) {
  $vars['display_mode']  = COMMENT_MODE_THREADED_EXPANDED;
  $vars['display_order'] = COMMENT_ORDER_OLDEST_FIRST;
  $vars['comment_controls_state'] = COMMENT_CONTROLS_HIDDEN;
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
  $output = '';
  if ($primary = menu_primary_local_tasks()) {
    $output .= "<ul class=\"tabs primary\">\n". $primary ."</ul>\n";
  }
  return $output;
}

/**
* Fixes illegal duplicate html id's "edit-sumit".
*/
function phptemplate_submit($element) {
  static $dupe_ids = array();
  if (isset($dupe_ids[$element['#id']])) {
    $dupe_ids[$element['#id']]++;
    $element['#id'] = $element['#id'] .'-'. $dupe_ids[$element['#id']];
  }
  else {
    $dupe_ids[$element['#id']] = 0;
  }
  return theme('button', $element);
}

function research_theme(&$existing, $type, $theme, $path) {
  return array(
    'uprofile_node_form' => array(
        'arguments' => array('form' => NULL),
        'template' => 'uprofile_form',
								'path' => drupal_get_path('theme', 'research') .'/templates',
    ),
  );
}

/* Modify node add/edit form */
function research_node_form($form) {
  //Modify Groups subform
  $form['path']['#collapsed'] = TRUE;
  $form['log']['#title'] = t('Add Revision Note');
  //Modify node add/edit theme selection form
  $form['webfm-attach']['attach']['#title'] = "File Attachments";
  $form['themes']['#title'] = "Select Theme";
  $form['themes']['#collapsed'] = TRUE;
  //Modify content scheduling fieldset
  $form['scheduler_settings']['#title'] = t('Schedule Publication');
  $form['scheduler_settings']['publish_on']['#description'] = t('Format: %time. ', array('%time' => date('Y-m-d H:i:s')));
  $form['scheduler_settings']['unpublish_on']['#description'] = t('Format: %time. ', array('%time' => date('Y-m-d H:i:s')));
  $form['options']['#collapsed'] = FALSE;
  $form['webfm_uploads']['#collapsed'] = FALSE;
  $form['template']['#value'] = 'forms/' . $form['type']['#value'] . '_form';
  $output = drupal_render($form);
  return $output;
}
