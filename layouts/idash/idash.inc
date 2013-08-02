<?php
// $Id: twocol.inc,v 1.1.2.3 2010/06/22 15:54:25 merlinofchaos Exp $

// Plugin definition
$plugin = array(
  'title' => t('Intranet Dash Panels'),
  'category' => t('Columns: 3'),
  'icon' => 'idash.png',
  'theme' => 'idash',
  'css' => 'idash.css',
  'panels' => array(
    'idash_top_left' => t('Intranet Dash Top Left'),
    'idash_top_right' => t('Intranet Dash Top Right'),
    'idash_left' => t('Intranet Dash Left'),
    'idash_left2' => t('Intranet Dash Left 2'),
    'idash_central_top' => t('Intranet Dash Central Top'),
    'idash_central_middle' => t('Intranet Dash Central Middle'),
    'idash_central_bot' => t('Intranet Dash Central Bottom'),
    'idash_right' => t('Intranet Dash Right'),
    'idash_right2' => t('Intranet Dash Right 2'),
  ),
);
