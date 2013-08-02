<?php
// $Id: twocol.inc,v 1.1.2.3 2010/06/22 15:54:25 merlinofchaos Exp $

// Plugin definition
$plugin = array(
  'title' => t('Media Panels'),
  'category' => t('Columns: 3'),
  'icon' => 'media.png',
  'theme' => 'media',
  'css' => 'media.css',
  'panels' => array(
    'media_top' => t('Media Top'),
    'media_left' => t('Media Left'),
    'media_left2' => t('Media Left 2'),
    'media_central_top' => t('Media Central Top'),
    'media_central_mid_right' => t('Media Central Mid Right'),
    'media_central_mid_left' => t('Media Central Mid Left'),
    'media_central_mid2' => t('Media Central Mid Lower'),
    'media_central_bot' => t('Media Central Bottom'),
    'media_right' => t('Media Right'),
  ),
);
