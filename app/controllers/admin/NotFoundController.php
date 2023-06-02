<?php

namespace app\controllers\admin;

use app\controllers\AdAbstractController;
use app\controllers\admin\AdminController;

class NotFoundController extends AdAbstractController
{
    public function notFoundAction()
    {
        $this->_view();
    }
}
