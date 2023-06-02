<?php

namespace app\controllers\admin;

use app\controllers\AdAbstractController;
use app\controllers\admin\AdminController;
use app\models\admin\Privilege;

class PrivilegesController extends AdAbstractController
{
  public function defaultAction()
  {
    $this->language->load('admin.template.common');
    $this->language->load('admin.privileges.default');

    $this->_data['privileges'] = Privilege::getAll();

    $this->_view();
  }
    public function createAction()
    {
      $this->_view();
    }

}
