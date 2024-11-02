<?php

$databases['default']['default'] = array (
  'database' => 'drupal11',
  'username' => 'drupal11',
  'password' => 'drupal11',
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$cache = FALSE;
if (!$cache) {
  $settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.lando.yml';
  $config['system.performance']['css']['preprocess'] = FALSE;
  $config['system.performance']['js']['preprocess'] = FALSE;
  $settings['cache']['bins']['render'] = 'cache.backend.null';
  $settings['cache']['bins']['page'] = 'cache.backend.null';
  $settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
}
