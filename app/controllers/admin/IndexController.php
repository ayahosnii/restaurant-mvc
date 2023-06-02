<?php

namespace app\controllers\admin;

use app\controllers\AbstractController;
use app\controllers\AdAbstractController;

class IndexController extends AdAbstractController
{
  public function defaultAction()
  {
    $this->language->load('admin.template.common');
    $this->language->load('admin.index.default');
    $this->_view();
  }

  public function addAction()
  {
    $this->_view();
  }
}

