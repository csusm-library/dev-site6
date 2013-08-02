<?php
// $Id: twocol.inc,v 1.1.2.3 2010/06/22 15:54:25 merlinofchaos Exp $

// Plugin definition
$plugin = array(
  'title' => t('Dash Panels'),
  'category' => t('Columns: 3'),
  'icon' => 'dash.png',
  'theme' => 'dash',
  'css' => 'dash.css',
  'panels' => array(
    'dash_left' => t('Dash Left'),
    'dash_left2' => t('Dash Left 2'),
    'dash_central_top' => t('Dash Central Top'),
    'dash_central_mid_right' => t('Dash Central Mid Left'),
    'dash_central_mid_left' => t('Dash Central Mid Right'),
    'dash_central_mid2' => t('Dash Central Mid Lower'),
    'dash_central_bot' => t('Dash Central Bottom'),
    'dash_right' => t('Dash Right'),
  ),
);
