<?php

namespace app\controllers\admin;

use app\controllers\AbstractController;
use app\lib\Admin;
use app\lib\Front;
use app\lib\Template;

class AdminController extends AbstractController
{
  public function defaultAction()
  {
    $this->language->load('template.common');
    $this->language->load('admin.index.default');
    $this->_view();
  }

  public function addAction()
  {
    $this->_view();
  }
}
