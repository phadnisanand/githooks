<?php

namespace Drupal\bad_code_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Bad Code Demo routes.
 */
class BadCodeController extends ControllerBase {

  /**
   * Test page.
   *
   * @return array
   *   Render array.
   */
  public function test(): array {
    $a = 5;

    if ($a > 3) {
      return [
        '#markup' => 'Hello world',
      ];
    }

    return [
      '#markup' => 'Condition not met',
    ];
  }

}
