<?php

namespace app\controllers\admin;

use app\controllers\admin\AdminController;

class UsersGroupsController extends AdminController
{
    public function defaultAction()
    {
        $this->_view();
    }

    public function createAction()
    {
      $this->_view();
    }

}
