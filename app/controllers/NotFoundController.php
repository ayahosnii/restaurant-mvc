<?php

namespace app\controllers;

use app\controllers\AbstractController;

class NotFoundController extends AbstractController
{
    public function notFoundAction()
    {
        $this->language->load('template.common');
        $this->_view();
    }
}
