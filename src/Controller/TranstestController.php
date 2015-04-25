<?php

/**
 * @file
 * Contains Drupal\transtest\Controller\TranstestController.
 */

namespace Drupal\transtest\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class TranstestController.
 *
 * @package Drupal\transtest\Controller
 */
class TranstestController extends ControllerBase {
  /**
   * Testit.
   *
   * @return array
   *   Render array
   */
  public function testit() {
    return [
      // '#type' => 'page',
      '#theme' => 'transtest',
    ];
  }

}
