<?php

function tbr_bootstrap_html_head_alter(&$head_elements) {
  unset($head_elements['metatag_generator']);
  unset($head_elements['system_metatag_generator']);
}

function tbr_bootstrap_preprocess_html(&$variables) {

  $tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);
  $tbr_host = explode('-', $tbr_host);
  $tbr_host = $tbr_host[0];

  //add host class in the body
  $variables['classes_array'][] = $tbr_host;

  $filename = "host-{$tbr_host}.css";
  $path = drupal_get_path("theme", "tbr_bootstrap");

  //if the site specific style exists, then load it VERY last
  if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/{$path}/css/{$filename}")) {
    drupal_add_css("{$path}/css/{$filename}", array('group' => CSS_THEME, 'every_page' => true, 'weight' => 9999));
  }

}'every_page' => true, 'weight' => 9999));
  }
  if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/{$path}/js/{$filenamejs}")) {
    drupal_add_js("{$path}/js/{$filenamejs}", array('group' => JS_THEME, 'every_page' => true, 'weight' => 9999));
  }

}