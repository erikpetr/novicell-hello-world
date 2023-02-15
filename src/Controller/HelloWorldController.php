<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

class HelloWorldController extends ControllerBase {

  public function testPage(): array {
    $build = [];

    $build['#markup'] = $this->t('Hello World!');

    return $build;
  }

  public function testPageTitle(): TranslatableMarkup {
    return $this->t('Hello World!');
  }

}
