<?php

/**
 * @file
 * template.php
 */
 
 function uttheme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'uttheme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'uttheme_preprocess_user_login'
  ),
 );
return $items;
}


