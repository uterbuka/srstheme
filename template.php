<?php

/**
 * @file
 * template.php
 */
 
 function srstheme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'srstheme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'srstheme_preprocess_user_login'
  ),
 );
return $items;
}


