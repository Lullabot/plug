<?php

/**
 * @file
 * Contains \Drupal\plugins_example\FoodPluginManager.
 */

namespace Drupal\plug_example;

use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * SearchExecute plugin manager.
 */
class NamePluginManager extends DefaultPluginManager {

  /**
   * Constructs FoodPluginManager
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \DrupalCacheInterface $cache_backend
   *   Cache backend instance to use.
   */
  public function __construct(\Traversable $namespaces, \DrupalCacheInterface $cache_backend) {
    parent::__construct('Plugin/name', $namespaces, 'Drupal\plug_example\Plugin\name\NameInterface');
    $this->setCacheBackend($cache_backend, 'name_plugins');
    $this->alterInfo('name_plugin');
  }
}
