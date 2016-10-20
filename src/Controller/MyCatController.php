<?php

/**
 * @file
 * Contains \Drupal\mycatmodule\Controller\MyCatController class.
 */

namespace Drupal\mycatmodule\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class MyCatController.
 *
 * @package Drupal\mycatmodule\Controller
 */
class MyCatController extends ControllerBase {
  public function cats($name) {
    return [
        '#markup' => t('My cats name is: @name', [
        '@name' => $name,
      ]),
    ];
  }
}
