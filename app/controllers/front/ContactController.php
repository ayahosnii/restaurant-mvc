<?php

namespace app\controllers\front;

use app\controllers\AbstractController;

class ContactController extends AbstractController
{
    public function defaultAction()
    {
        $this->messenger->add('hi');
        unset($this->session->messages);
        $this->session->messages = 'hi';
        $this->language->load('template.common');
        $this->language->load('index.default');
        $this->_view();
    }

    public function addAction()
    {
        $this->_view();
    }
}
